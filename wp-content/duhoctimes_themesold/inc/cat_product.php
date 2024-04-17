<?php
	function tax_cat_init() {
		
	}
	add_action( 'init', 'tax_cat_init' );

	function tax_abroad_init() {
		// create a new taxonomy
		register_taxonomy(
			'abroad_category',
			array(),
			array(
				'label' => __('Danh Mục bài viết du học','ht'),
				'rewrite' => array('with_front' => true, 'hierarchical' => true),
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
	}
	add_action( 'init', 'tax_abroad_init' );
	function abroad_init(){
		$labels = array(
	    'name' => __('Điểm đến du học','ht'),
	    'singular_name' => __('Điểm đến du học','ht'),
	    'add_new' => __('Thêm Mới bài viết','ht'),
	    'add_new_item' => __('Thêm Mới bài viết du học','ht'),
	    'edit_item' => __('Sửa bài viết','ht'),
	    'new_item' => __('Thêm Mới','ht'),
	    'all_items' => __('Tất cả bài viết','ht'),
	    'view_item' => __('Xem bài viết','ht'),
	    'search_items' => __('Tìm bài viết du học','ht'),
	    'not_found' => __('Không tìm thấy bài viết du học nào','ht'),
	    'not_found_in_trash' => __('Không có bài viết du học nào trong thùng rác','ht'), 
	    'parent_item_colon' => '',
	    'menu_name' => __('Điểm đến du học','ht')
	  );
	
	  $args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true, 
	    'show_in_menu' => true, 
	    'query_var' => true,
	    'rewrite' => array('slug'=>'abroad'),
	    'capability_type' => array('post','page'),
	    'has_archive' => true, 
	    'hierarchical' => false,
	    'menu_position' => 5,
	    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'trackbacks'),
	    'taxonomies' => array('post_tag')
	  ); 
	
		register_post_type( 'abroad', $args );
		register_taxonomy_for_object_type( 'abroad_category', 'abroad' );
		
		register_taxonomy(
			'lesson_category',
			array(),
			array(
				'label' => __('Danh Mục bài học','ht'),
				'rewrite' => array('with_front' => true, 'hierarchical' => true),
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
	add_action( 'init', 'tax_lesson_init' );
		$labels = array(
	    'name' => __('Các bài học','ht'),
	    'singular_name' => __('Bài học','ht'),
	    'add_new' => __('Thêm Mới bài học','ht'),
	    'add_new_item' => __('Thêm Mới bài học','ht'),
	    'edit_item' => __('Sửa bài học','ht'),
	    'new_item' => __('Thêm Mới','ht'),
	    'all_items' => __('Tất cả bài học','ht'),
	    'view_item' => __('Xem bài học','ht'),
	    'search_items' => __('Tìm bài học','ht'),
	    'not_found' => __('Không tìm thấy bài học nào','ht'),
	    'not_found_in_trash' => __('Không có bài học nào trong thùng rác','ht'), 
	    'parent_item_colon' => '',
	    'menu_name' => __('Bài học','ht')
	  );
	
	  $args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true, 
	    'show_in_menu' => true, 
	    'query_var' => true,
	    'rewrite' => array('slug'=>'lesson'),
	    'capability_type' => array('post','page'),
	    'has_archive' => true, 
	    'hierarchical' => false,
	    'menu_position' => 5,
	    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'trackbacks'),
	     'taxonomies' => array('post_tag')
	  ); 
	
		register_post_type( 'lesson', $args );
		register_taxonomy_for_object_type( 'lesson_category', 'lesson' );
		
		register_taxonomy(
			'document_category',
			array(),
			array(
				'label' => __('Danh mục xếp hạng','ht'),
				'rewrite' => array('with_front' => true, 'hierarchical' => true),
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
	add_action( 'init', 'tax_document_init' );
		$labels = array(
		    'name' => __('Bảng Xếp Hạng','ht'),
		    'singular_name' => __('Xếp Hạng','ht'),
		    'add_new' => __('Thêm Mới','ht'),
		    'add_new_item' => __('Thêm Mới Xếp Hạng','ht'),
		    'edit_item' => __('Sửa Xếp Hạng','ht'),
		    'new_item' => __('Thêm Mới','ht'),
		    'all_items' => __('Tất cả Xếp Hạng','ht'),
		    'view_item' => __('Xem Xếp Hạng','ht'),
		    'search_items' => __('Tìm Xếp Hạng','ht'),
		    'not_found' => __('Không tim thấy Xếp Hạng nào','ht'),
		    'not_found_in_trash' => __('Không có Xếp Hạng nào trong thùng rác','ht'), 
		    'parent_item_colon' => '',
		    'menu_name' => __('Bảng Xếp Hạng','ht')
		  );
		
		  $args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true, 
		    'show_in_menu' => true, 
		    'query_var' => true,
		    'rewrite' => array('slug'=>'document'),
		    'capability_type' => 'post',
		    'has_archive' => true, 
		    'hierarchical' => false,
		    'menu_position' => 8,
		    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'trackbacks'),
		     'taxonomies' => array('post_tag')
	   );
		register_post_type( 'document', $args );
		register_taxonomy_for_object_type( 'document_category', 'document' );
}
	add_action( 'init', 'abroad_init' );	
	function vipx_remove_cpt_slug( $post_link, $post, $leavename ) {
 		
	    if ( ! in_array( $post->post_type, array( 'post','page','abroad','document','lesson') ) || 'publish' != $post->post_status )
	        return $post_link;
		
	 	$post_type_data = get_post_type_object(  $post->post_type );
    	$post_type_slug = ($post_type_data->rewrite['slug'])? $post_type_data->rewrite['slug']:$post->post_type;
		
	    $post_link = str_replace( '/' . $post_type_slug . '/', '/', $post_link );
	    return $post_link;
	}
	add_filter( 'post_type_link', 'vipx_remove_cpt_slug', 10, 3 );
	function vipx_parse_request_tricksy( $query ) {
 
	    // Only noop the main query
	    if ( ! $query->is_main_query() )
	        return;
	 
	    // Only noop our very specific rewrite rule match
	    if ( 2 != count( $query->query )
	        || ! isset( $query->query['page'] ) )
	        return;
	 
	    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
	    if ( ! empty( $query->query['name'] ) )
	        $query->set( 'post_type', array( 'post', 'page','abroad','document','lesson') );
	}
	add_action( 'pre_get_posts', 'vipx_parse_request_tricksy' );

	function product_rewrite_flush() {
	    flush_rewrite_rules();
	}
	add_action( 'after_switch_theme', 'product_rewrite_flush' );
	//add filter to ensure the text product, or product, is displayed when user updates a product 

	function set_messages($messages) {
		global $post, $post_ID;
		$post_type = get_post_type( $post_ID );
		
		$obj = get_post_type_object($post_type);
		$singular = $obj->labels->singular_name;
		
		$messages[$post_type] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __($singular.' updated. <a href="%s">View '.strtolower($singular).'</a>'), esc_url( get_permalink($post_ID) ),'ht' ),
		2 => __('Custom field updated.','ht'),
		3 => __('Custom field deleted.','ht'),
		4 => __($singular.' updated.','ht'),
		5 => isset($_GET['revision']) ? sprintf( __($singular.' restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ),'ht' ) : false,
		6 => sprintf( __($singular.' published. <a href="%s">View '.strtolower($singular).'</a>'), esc_url( get_permalink($post_ID) ),'ht' ),
		7 => __('Page saved.','ht'),
		8 => sprintf( __($singular.' submitted. <a target="_blank" href="%s">Preview '.strtolower($singular).'</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ),'ht' ),
		9 => sprintf( __($singular.' scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview '.strtolower($singular).'</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ),'ht' ),
		10 => sprintf( __($singular.' draft updated. <a target="_blank" href="%s">Preview '.strtolower($singular).'</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ,'ht'),
		);
		return $messages;
	}	
	add_filter('post_updated_messages', 'set_messages' );	
	add_action( 'restrict_manage_posts','my_filter_list' );
	function my_filter_list() {
		$screen = get_current_screen();
		global $wp_query;
        if ( $screen->post_type == 'abroad' ) {
        	wp_dropdown_categories(array(
				'show_option_all' => __('Show All Category','ht'),
				'taxonomy' => 'abroad_category',
				'name' => 'abroad_category',
				'orderby' => 'name',
				'selected' =>( isset( $wp_query->query['abroad_category'] ) ? $wp_query->query['abroad_category'] : '' ),
				'hierarchical' => false,
				'depth' => 3,
				'show_count' => false,
				'hide_empty' => false)
			);
		}
	}
	
	add_filter( 'parse_query','perform_filtering' );
	
	function perform_filtering( $query )
	 {
		$qv = &$query->query_vars;
		if (( $qv['service_category'] ) && is_numeric( $qv['abroad_category'] ) ) {
			$term = get_term_by( 'id', $qv['abroad_category'], 'abroad_category' ); 
			$qv['abroad_category'] = $term->slug;
		}
	}
	 
	$meta_prefix = 'ht_post_';
	$meta_boxes = array();
	$meta_boxes[] = array(
		'id' => 'info_post',
		'title' => __('Post Detail','ht'),
		'pages' => array('post'), // multiple post types, accept custom post types
		'context' => 'normal', // normal, advanced, side (optional)
		'priority' => 'high', // high, low (optional)
		'fields' => array(
			array(
				'name' => __('Show as Feature?','ht'),
				'desc' => '',
				'id' => $meta_prefix.'feature',
				'type' => 'checkbox', // text box
				'std' => '',
				'class' => 'mini',
				'class_wrap' => 'clear'
			),
			array(
				'name' => __('Show as Latest News?','ht'),
				'desc' => '',
				'id' => $meta_prefix.'latest',
				'type' => 'checkbox', // text box
				'std' => '',
				'class' => 'mini',
				'class_wrap' => 'clear'
			),
			array(
				'name' => __('Gallery','ht'),
				'desc' => '',
				'id' => $meta_prefix.'gallery',
				'type' => 'wysiwyg', // text box
				'std' => ''
			),
			array(
				'name' => __('Video','ht'),
				'desc' => '',
				'id' => $meta_prefix.'video',
				'type' => 'wysiwyg', // text box
				'std' => ''
			)
		
						
		)
	);
	$meta_boxes[] = array(
	'id' => 'info_document', 
	'title' => __('Chi tiết xếp hạng', 'ht'), 'pages' => array('document'), // multiple post types, accept custom post types
	'context' => 'normal', // normal, advanced, side (optional)
	'priority' => 'high', // high, low (optional)
	'fields' => array(
		array(
			'name' => __('File xếp hạng', 'ht'), 
			'desc' => '', 
			'id' => 'ht_document_file', 
			'type' => 'get_media', // text box,
			'std' => ''
		)
	)
);
	$meta_boxes[] = array(
		'id' => 'info_post',
		'title' => __('Post Detail','ht'),
		'pages' => array('abroad'), // multiple post types, accept custom post types
		'context' => 'normal', // normal, advanced, side (optional)
		'priority' => 'high', // high, low (optional)
		'fields' => array(
			array(
				'name' => __('Order','ht'),
				'desc' => '',
				'id' => $meta_prefix.'order',
				'type' => 'text', // text box
				'std' => '',
				'class' => 'mini'
			)			
		)
	);
	foreach ($meta_boxes as $meta_box) {
		$my_box = new RW_Meta_Box($meta_box);
	}

	if(!function_exists('qtranslate_edit_taxonomies') && function_exists('ppqtrans_modifyTermFormFor')){
		function qtranslate_edit_taxonomies(){
			$args=array(
				'public' => true ,
				'_builtin' => false
			);
			$output = 'object'; // or objects
			$operator = 'and'; // 'and' or 'or'
			
			$taxonomies = get_taxonomies($args,$output,$operator);
			
			if ($taxonomies) {
				foreach ($taxonomies as $taxonomy ) {
					add_action( $taxonomy->name.'_add_form', 'ppqtrans_modifyTermFormFor');
					add_action( $taxonomy->name.'_edit_form', 'ppqtrans_modifyTermFormFor');
				}
			}
		}
		add_action('admin_init', 'qtranslate_edit_taxonomies');
	}
	
	
/*$prefix = 'ht_feel_';
$meta_boxes_feel = array();
$meta_boxes_feel[] = array(
	'id' => 'info_feel',
	'title' => __('Chi tiết cảm nhận','ht'),
	'pages' => array('feel'), // multiple post types, accept custom post types
	'context' => 'normal', // normal, advanced, side (optional)
	'priority' => 'high', // high, low (optional)
	'fields' => array(
		array(
			'name' => __('Thành tích','ht'),
			'desc' => '',
			'id' => $prefix.'result',
			'type' => 'text', // text box
			'std' => ''
		),
		
	)
);
foreach ($meta_boxes_feel as $meta_box) {
	$my_box = new RW_Meta_Box($meta_box);
}*/
	
?>