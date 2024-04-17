<?php
/*
  Plugin Name: ht-media-cat
  Description: Create categories for media
  Version: 1.0
  Author: HuynhTin
  Author URI: huynhtin.com
 */
function ht_get_media_category($category){
	$_attachments = get_posts( array('posts_per_page' => -1, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'tax_query' => array(array('taxonomy' => 'media_category', 'field' => 'id' ,'terms' => $category))) );
    return $_attachments;
}

class ht_media_category {
    public function __construct() {
        register_activation_hook(__FILE__, array($this, 'register_activation_hook'));
		add_action( 'init', array($this, 'plugin_init'), 0);
        add_action('init', array($this, 'create_media_categories'), 0);
        add_action('admin_menu', array($this, 'media_category_add_admin'), 0);
        add_filter('attachment_fields_to_edit', array(&$this, 'add_media_category_field'), 22, 2);
        add_filter('attachment_fields_to_save', array(&$this, 'save_media_category_field'), 23, 2);
        add_filter('manage_media_columns', array(&$this, 'add_media_column'));
        add_action('manage_media_custom_column', array(&$this, 'manage_media_column'), 10, 2);
        add_action('restrict_manage_posts', array(&$this, 'restrict_media_by_category'));
        add_filter('posts_where', array(&$this, 'convert_attachment_id_to_taxonomy_term_in_query'));
    }

    public function register_activation_hook() {
        $uri = WP_CONTENT_DIR . str_replace(WP_CONTENT_URL, '', get_bloginfo('template_directory')) . '/taxonomy-media_category.php';
        if (!file_exists($uri)) {
            $fp = fopen($uri, 'a+');
            fwrite($fp, '<?php /* Template for media_category */ ?>');
            fclose($fp);
        }
    }
	function plugin_init() {
		load_plugin_textdomain( 'ht',  false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
    public function create_media_categories() {
		register_taxonomy(
			'media_category',
			array('media'),
			array(
				'label' => __('Media Categories','ht'),
				'rewrite' => array('hierarchical' => true, 'with_front' => false),
				'capabilities' => array(
					'manage_terms' => 'read',
					'edit_terms' => 'read',
					'delete_terms' => 'read',
					'assign_terms' => 'read' 
				),
				'query_var' => true,
				'hierarchical' => true,
				'show_admin_column' => true,
			)
		);
        /*if (!term_exists(__('Uncategorized','ht'), 'media_category')) {
            wp_insert_term(
                    __('Uncategorized','ht'),
                    'media_category',
                    array(
                        'description' => '',
                        'slug' => 'uncategorized',
                        'parent' => '0'
                    )
            );
        }*/
    }

    public function media_category_add_admin() {
        add_submenu_page('upload.php', __('Media Categories','ht'), __('Categories','ht'), 10, 'edit-tags.php?taxonomy=media_category&post_type=media');
    }

    public function add_media_category_field($fields, $object) {
            $selected_categories = (array) wp_get_object_terms($object->ID, 'media_category', array('fields' => 'ids'));
            $categories = get_terms('media_category', 'orderby=count&hide_empty=0');
            $html .= '<ul style="width:200px; height:120px; overflow-y:scroll; padding:2px; background-color:#fff; border:1px solid #DFDFDF;">';
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    $html .= '<li><label class="selectit"><input ' . (in_array($category->term_id, $selected_categories) ? 'checked' : '') . ' name="attachments[' . $object->ID . '][media-categories][' . $category->term_id . ']" type="checkbox" value="' . $category->term_id . '" > ' . $category->name . '</label></li>';
                }
            }
            $html .= '</ul>';

            $label = __('Category','ht');
			$fields = array(
				'media_library_categories' => array(
	                'label' => $label,
	                'input' => 'html',
	                'html' => $html,
	                'value' => (!empty($selected_categories)) ? $selected_categories->term_id : '',
	                'helps' => ''
	            ),
				'link_img' => array(
					'label' => __( 'Link URL', 'ht' ),
					'value' => get_post_meta($object->ID, '_link_img', true),
					'helps' => ''
				),
				'order_img' => array(
					'label' => __( 'Sắp xếp', 'ht' ),
					'value' => get_post_meta($object->ID, '_order_img', true),
					'helps' => ''
				)
			);
        return $fields;
    }

    public function save_media_category_field($post, $attachment) {
    	foreach((array)$attachment as $k => $v){
    		update_post_meta($post['ID'], '_'.$k, $v);
	}
        $terms = array();
        if (count($attachment['media-categories']) > 0) {
            foreach ($attachment['media-categories'] as $termID) {
                $term = get_term($termID, 'media_category');
                array_push($terms, $term->name);
            }
        }
        wp_set_object_terms($post['ID'], $terms, 'media_category', false);
		unset($attachment['media-categories']);
		
        return $post;
    }

    function add_media_column($posts_columns) {
        $posts_columns['att_cats'] = _x('Danh Mục', 'column name','ht');
		$posts_columns['order_img'] = _x('Sắp Xếp', 'column name','ht');
        return $posts_columns;
    }

    function manage_media_column($column_name, $id) {
        switch ($column_name) {
            case 'att_cats':
                $tagparent = "upload.php?";
                $categories = (array) wp_get_object_terms($id, 'media_category', array('fields' => 'all'));
                if (!empty($categories)) {
                    $arr_categories;
                    foreach($categories as $category){
                        $arr_categories[] = '<a href="?media_category=' . $category->slug . '">' . $category->name . '</a>';
                    }
                    echo implode(', ', $arr_categories);
                } else {
                    _e('Không có','ht');
                }
                break;
			case 'order_img':
				$order = get_post_meta($id, '_order_img', true);
				echo $order;
				break;
            default:
                break;
        }
    }

    function restrict_media_by_category() {
        global $pagenow;
        global $typenow;
        global $wp_query;
        if ($pagenow == 'upload.php') {
            $taxonomy = 'media_category';
            $media_taxonomy = get_taxonomy($taxonomy);
			$selected_categories = (isset($_GET['media_category']) && !empty($_GET['media_category']))? $_GET['media_category']:0;
            $categories = get_terms('media_category', 'orderby=count&hide_empty=0');
            echo '<select name="media_category">';
			echo '<option value="0">'.__('Chọn Danh Mục','ht').'</option>';
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo '<option value="'.$category->slug.'" ' , ($category->slug === $selected_categories) ? 'selected="selected"' : '' , '> ' . $category->name . '</option>';
                }
            }
			echo '</select>';
            /*$cats = wp_dropdown_categories(array(
                'show_option_all' => __('View all categories','ht'),
                'taxonomy' => $taxonomy,
                'name' => 'media_category',
                'orderby' => 'name',
                'selected' => $wp_query->query['term'],
                'hierarchical' => true,
                'depth' => 3,
                'show_count' => true,
                'hide_empty' => true,
                'echo' => false
            ));*/
			
        }
    }

    function convert_attachment_id_to_taxonomy_term_in_query($where) {
        global $pagenow;
        global $wpdb;
        if ($pagenow == 'upload.php' && intval($_GET['media_category']) > 0) {
            //$subquery = "SELECT r.object_id FROM $wpdb->term_relationships r INNER JOIN $wpdb->term_taxonomy tax on tax.term_taxonomy_id = r.term_taxonomy_id WHERE tax.term_id = " . $_GET['media_category'];
            //$where .= " AND ID IN ($subquery)";
			//$where .= " AND ( wp_term_relationships.term_taxonomy_id IN (" . $_GET['media_category'].") )";
        }
        return $where;
    }

}
$media_category = new ht_media_category();
?>
