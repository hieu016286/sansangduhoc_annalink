<?php
	/* Enable Gzip with php
	add_action('init' ,'ezgz_buffer');

	function ezgz_buffer () {
		ob_start('ob_gzhandler');
	} */
	function _remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
	}
	add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
	function image_to_base64($path_to_image)
	{
		$type = pathinfo($path_to_image, PATHINFO_EXTENSION);
		$image = file_get_contents($path_to_image);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
		return $base64;
	}
	/* End user module */
	function get_list_product_cat($data = array()){
		$defaults = array('taxonomy' => 'category', 'parent' => 0, 'array_current' => array());
		$data = wp_parse_args( $data, $defaults );
		$html = '';
		if(!taxonomy_exists($data['taxonomy'])) return '<option>'.__('Not exists taxonomy','fom').'</option>';
		$terms = get_terms($data['taxonomy'],array('hide_empty'=>0,'parent' => $data['parent']));
	
		if(!is_wp_error( $terms ) && is_array($terms))
			foreach( $terms as $c ) {
				$selected = '';
				if (!empty($data['array_current']) && is_array($data['array_current']) && in_array($c->term_id, $data['array_current'])) $selected = ' selected="selected"';
				$html .= '<option' . $selected . ' class="'.$data['taxonomy'].'" value="' . $c->term_id . '" parent="'.$parent.'">' . $c->name . '</option>';
				$html .= get_list_product_cat(array('taxonomy' => $data['taxonomy'], 'parent' => $c->term_id, 'array_current' => $data['array_current']));
			}
		return $html;
	}
	function ht_list_pages($parent = 0, $children_level = 0){
		$pages = new WP_Query( array( 'post_type' => 'page', 'post_parent' => $parent));
		$list_page = array();
		if($pages->have_posts()){
			global $post;
			while($pages->have_posts()){
				$pages->the_post();
				$post->children_level = $children_level;					
	            $list_page[$post->ID] = $post;
				$subpage = ht_list_pages($post->ID, ($children_level + 1));
				$list_page = array_merge($list_page, $subpage);
			}
			wp_reset_postdata();
		}
		return $list_page;
	}
	function build_hierarchical_term($terms = array(), $parentid = 0){
		$buildterms = array();	
		if(!is_wp_error( $terms ) && is_array($terms) && !empty($terms) && $parentid >= 0){
			foreach ( $terms as $k => &$term ){
				if($term->parent == $parentid){
					$buildterms[$term->term_id] = $term;
					unset($terms[$k]);
					$buildterms[$term->term_id]->term_children = build_hierarchical_term($terms,$term->term_id);
				}
			}
		}
		return $buildterms;
	}
	function get_checkbox_hierarchical($c,$terms,$selected_current){
		foreach ( $terms as $term ) {
			$selected = '';
			if(isset($selected_current[$c]['term'])){
				if(is_array($selected_current[$c]['term']) ){
					$selected = (isset($selected_current[$c]['term']) && in_array($term->slug, $selected_current[$c]['term'])) ? 'checked="checked"' : '';
				}
				else{
					$selected = (isset($selected_current) && $selected_current[$c]['term']==$term->slug) ? 'checked="checked"' : '';
				}
			}
			$value = $term->slug;
			echo '<label class="taxcheckbox"><input type="checkbox" id="taxo-'.$c.'" name="taxo['.$c.'][term][]" value="'.$value.'" '.$selected.'>'.$term->name.'</label>';
			if(isset($term->term_children) && is_array($term->term_children) && !empty($term->term_children)){
				echo '<div class="sub-checkbox">';
					get_checkbox_hierarchical($c,$term->term_children,$selected_current);
				echo '</div>';
			}
		}
	}
	function ht_slider(){
		if(of_get_option('ht_option_slider_enable')){
			$cat = of_get_option('ht_option_slider_cat');
			if($cat && function_exists('ht_get_media_category')){			
				$array_img = ht_get_media_category($cat);
				if(!empty($array_img)){
					for($i=0; $i<(count($array_img) - 1);$i++){
						$order_i = get_post_meta($array_img[$i]->ID,'_order_img',true);
						$temp = $array_img[$i];
						$min = array('pos' => $i, 'order' => (int)$order_i);
						for($j=$i+1; $j<count($array_img);$j++){
							$order_j = get_post_meta($array_img[$j]->ID,'_order_img',true);
							if( $min['order'] > (int)$order_j){
								$min=array('pos' => $j, 'order' => (int)$order_j);
							}
						}
						$array_img[$i] = $array_img[$min['pos']];
						$array_img[$min['pos']] = $temp;
					}
					echo '<div class="main-slider theme-default">';
						echo '<div id="slider" class="nivoSlider">';				 
							foreach($array_img as $data){
								$link_img = get_post_meta($data->ID, '_link_img', true); 
								if(empty($link_img)) $link_img = '#';
								echo '<a href="'. $link_img .'" data-order="'.get_post_meta($data->ID,'_order_img',true).'"><img src="'. $data->guid .'" data-thumb="'. $data->guid .'" alt="'. $data->post_title .'" /></a>';
							}
						echo '</div>';
					echo '</div>';
				}
			}
		}
	}
	function get_list_abroad_cat($data = array()){
		$defaults = array('taxonomy' => 'category', 'parent' => 0, 'array_current' => array());
		$data = wp_parse_args( $data, $defaults );
		$html = '';
		if(!taxonomy_exists($data['taxonomy'])) return '<option>'.__('Not exists taxonomy','fom').'</option>';
		$terms = get_terms($data['taxonomy'],array('hide_empty'=>0,'parent' => $data['parent']));
	
		if(!is_wp_error( $terms ) && is_array($terms))
			foreach( $terms as $c ) {
				$selected = '';
				if (!empty($data['array_current']) && is_array($data['array_current']) && in_array($c->term_id, $data['array_current'])) $selected = ' selected="selected"';
				$html .= '<option' . $selected . ' class="'.$data['taxonomy'].'" value="' . $c->term_id . '" parent="'.$parent.'">' . $c->name . '</option>';
				$html .= get_list_abroad_cat(array('taxonomy' => $data['taxonomy'], 'parent' => $c->term_id, 'array_current' => $data['array_current']));
			}
		return $html;
	}
	function get_thumb($post_id = ''){
		$postid = ($post_id ) ? $post_id:get_the_ID();
        $post_thumbnail_id = get_post_thumbnail_id( $postid );
		$size = apply_filters( 'post_thumbnail_size', $size );
		if ( $post_thumbnail_id ) {
			$thumb = wp_get_attachment_image_src( $post_thumbnail_id, $size);
			if ($thumb != null or $thumb != '') {
				return $thumb[0];
			}
		}
		elseif ($images = get_children(array(
			'post_parent' => $postid,
			'post_type' => 'attachment',
			'numberposts' => '1',
			'post_mime_type' => 'image', )))
			foreach($images as $image) {
				$thumbnail=wp_get_attachment_image_src($image->ID, $size);
				return $thumbnail[0];
			}
		else{
			preg_match_all('/https?:\/\/(\S)+(jpe?g|png|[tg]iff?|svg)/',apply_filters('the_content',get_post_field('post_content',$post_id)),$newimg);
			if(isset($newimg[0][1])) return $newimg[0][1];
		}
		return get_bloginfo ('stylesheet_directory').'/images/no-image.jpg';
	}
	
	# Limit content Post
	function ht_content_limit($max_char, $content = '',  $more_link_text = '', $stripteaser = 0, $more_file = '', $excerpt = true) {
		$text_excerpt = get_post_field('post_excerpt', $post->ID);	
		if($excerpt && $text_excerpt){
			echo $text_excerpt;
		} else {
			if(empty($content)){
				$content = get_the_content($more_link_text, $stripteaser, $more_file);
				$content = apply_filters('the_content', $content);
			}
			$content = str_replace(']]>', ']]&gt;', $content);
			$content = strip_tags($content);
			if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
				$content = substr($content, 0, $espacio);
				echo $content. '...';
		   }
		   else {
			  echo $content. '...';
		   }
		}
	}
	//breadcrumbs
	function dimox_breadcrumbs() {        
		/* === OPTIONS === */  
	$text['home']     = __('Trang Chủ','ht'); // text for the 'Home' link  
	$text['category'] = '%s'; // text for a category page  
	$text['search']   = __('Kết quả tìm kiếm cho "%s"','ht'); // text for a search results page  
	$text['tag']      = __('Các bài viết được gắn Tag "%s"','ht'); // text for a tag page  
	$text['author']   = __('Các bài viết bởi %s','ht'); // text for an author page  
	$text['404']      = __('Error 404','ht'); // text for the 404 page  
  
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show  
	$showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show  
	$delimiter   = ' | '; // delimiter between crumbs  
	$before      = '<span class="current">'; // tag before the current crumb  
	$after       = '</span>'; // tag after the current crumb  
	/* === END OF OPTIONS === */  
  
	global $post;  
	$homeLink = get_bloginfo('url') . '/';  
	$linkBefore = '<span typeof="v:Breadcrumb">';  
	$linkAfter = '</span>';  
	$linkAttr = ' rel="v:url" property="v:title"';  
	$link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;  
  
	if (is_home() || is_front_page()) {  
  
		if ($showOnHome == 1) echo '<div id="crumbs" class=" breadcrumb "><a href="' . $homeLink . '">' . $text['home'] . '</a></div>';  
  
	} else {  
  
		echo '<div id="crumbs" class=" breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">' . sprintf($link, $homeLink, $text['home']) . $delimiter;  
		if(is_tax()){
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			//store curent term's id as first in the array
			$breadcrumbarray[] = $term->term_id;
			//transfer the term info object so we don't mess it up
			$tempterm = $term;
			//backward crawl terms...
			//if the current term in the crawl has a parent - get it's parent's id...
			while ($tempterm->parent != 0) {
				$tempterm = get_term_by('id',$tempterm->parent,get_query_var( 'taxonomy' ));
				// and store it in the array
				$breadcrumbarray[] .= $tempterm->term_id;
			}
			//now reverse order the array so it goes from parent to child...
			$breadcrumbarray = array_reverse($breadcrumbarray);
			//now we'll loop through our array to display each item in the parent to child order and with links...
			$isfirst = true;
			foreach($breadcrumbarray as $termid) {
				if (!$isfirst) echo $delimiter;
				$isfirst = false;
				// get all the info again for the current term id in the array
				$terminfo = get_term_by('id',$termid,get_query_var( 'taxonomy' ));
				//show links for all terms except the current one..
				if ($terminfo->term_id != $term->term_id) {
					//get the URL for that terms's page
					$url = get_term_link( $terminfo, get_query_var( 'taxonomy' ) );
					echo '<a href="'.$url.'">'.$terminfo->name.'</a>';
				} else {
					echo $terminfo->name;
				}
			}
			
		} elseif ( is_category() ) {  
			$thisCat = get_category(get_query_var('cat'), false);  
			if ($thisCat->parent != 0) {  
				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);  
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);  
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);  
				echo $cats;  
			}  
			echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;  
  
		} elseif ( is_search() ) {  
			echo $before . sprintf($text['search'], get_search_query()) . $after;  
  
		} elseif ( is_day() ) {  
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;  
			echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;  
			echo $before . get_the_time('d') . $after;  
  
		} elseif ( is_month() ) {  
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;  
			echo $before . get_the_time('F') . $after;  
  
		} elseif ( is_year() ) {  
			echo $before . get_the_time('Y') . $after;  
  
		} elseif ( is_single() && !is_attachment() ) { 
			$current_type = get_post_type_object(get_post_type());
			if ( $current_type->name == 'post') {
				$cat = get_the_category(); $cat = $cat[0]; 
				$cats = get_category_parents($cat, TRUE, $delimiter);  
				if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);  
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);  
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);  
				echo $cats;  
				if ($showCurrent == 1) echo $before . get_the_title() . $after; 
			} elseif ( $current_type->name == 'abroad') {
				if ( $terms = wp_get_object_terms( $post->ID, 'abroad_category' ) ) {
					$term = current( $terms );
					$parents = array();
					$parent = $term->parent;
					while ( $parent ) {
						$parents[] = $parent;
						$new_parent = get_term_by( 'id', $parent, 'abroad_category' );
						$parent = $new_parent->parent;
					}
		
					if ( ! empty( $parents ) ) {
						$parents = array_reverse($parents);
						foreach ( $parents as $parent ) {
							$item = get_term_by( 'id', $parent, 'abroad_category');
							echo $linkBefore . '<a'.$linkAttr.' href="' . get_term_link( $item->slug, 'abroad_category' ) . '">' . $item->name . '</a>' . $linkAfter . $delimiter;
						}
					}
		
					echo $linkBefore . '<a'.$linkAttr.' href="'.get_term_link( $term->slug, 'abroad_category' ).'">' . $term->name . '</a>' . $linkAfter . $delimiter;
		
				}

				if ($showCurrent == 1) echo $before . get_the_title() . $after;
			} 
			elseif ( $current_type->name == 'document') {
				if ( $terms = wp_get_object_terms( $post->ID, 'document_category' ) ) {
					$term = current( $terms );
					$parents = array();
					$parent = $term->parent;
					while ( $parent ) {
						$parents[] = $parent;
						$new_parent = get_term_by( 'id', $parent, 'document_category' );
						$parent = $new_parent->parent;
					}
		
					if ( ! empty( $parents ) ) {
						$parents = array_reverse($parents);
						foreach ( $parents as $parent ) {
							$item = get_term_by( 'id', $parent, 'document_category');
							echo $linkBefore . '<a'.$linkAttr.' href="' . get_term_link( $item->slug, 'document_category' ) . '">' . $item->name . '</a>' . $linkAfter . $delimiter;
						}
					}
		
					echo $linkBefore . '<a'.$linkAttr.' href="'.get_term_link( $term->slug, 'document_category' ).'">' . $term->name . '</a>' . $linkAfter . $delimiter;
		
				}

				if ($showCurrent == 1) echo $before . get_the_title() . $after;
			}
				elseif ( $current_type->name == 'lesson') {
				if ( $terms = wp_get_object_terms( $post->ID, 'lesson_category' ) ) {
					$term = current( $terms );
					$parents = array();
					$parent = $term->parent;
					while ( $parent ) {
						$parents[] = $parent;
						$new_parent = get_term_by( 'id', $parent, 'lesson_category' );
						$parent = $new_parent->parent;
					}
		
					if ( ! empty( $parents ) ) {
						$parents = array_reverse($parents);
						foreach ( $parents as $parent ) {
							$item = get_term_by( 'id', $parent, 'lesson_category');
							echo $linkBefore . '<a'.$linkAttr.' href="' . get_term_link( $item->slug, 'lesson_category' ) . '">' . $item->name . '</a>' . $linkAfter . $delimiter;
						}
					}
		
					echo $linkBefore . '<a'.$linkAttr.' href="'.get_term_link( $term->slug, 'lesson_category' ).'">' . $term->name . '</a>' . $linkAfter . $delimiter;
		
				}

				if ($showCurrent == 1) echo $before . get_the_title() . $after;
			}
			
			else {   
				$post_type = get_post_type_object(get_post_type());  
				$slug = $post_type->rewrite;  
				printf($link, $homeLink . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);  
				if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;                      
			}  
  
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {  
			$post_type = get_post_type_object(get_post_type());  
			echo $before . $post_type->labels->singular_name . $after;  
  
		} elseif ( is_attachment() ) {  
			$parent = get_post($post->post_parent);  
			$cat = get_the_category($parent->ID); $cat = $cat[0];  
			$cats = get_category_parents($cat, TRUE, $delimiter);  
			$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);  
			$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);  
			echo $cats;  
			printf($link, get_permalink($parent), $parent->post_title);  
			if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;  
		} elseif ( is_page() && !$post->post_parent ) {  
			if ($showCurrent == 1) echo $before . get_the_title() . $after;  
  
		} elseif ( is_page() && $post->post_parent ) {  
			$parent_id  = $post->post_parent;  
			$breadcrumbs = array();  
			while ($parent_id) {  
				$page = get_page($parent_id);  
				$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));  
				$parent_id  = $page->post_parent;  
			}  
			$breadcrumbs = array_reverse($breadcrumbs);  
			for ($i = 0; $i < count($breadcrumbs); $i++) {  
				echo $breadcrumbs[$i];  
				if ($i != count($breadcrumbs)-1) echo $delimiter;  
			}  
			if ($showCurrent == 1) echo $delimiter . $before . get_the_title() . $after;  
  
		} elseif ( is_tag() ) {  
			echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;  
  
		} elseif ( is_author() ) {  
			global $author;  
			$userdata = get_userdata($author);  
			echo $before . sprintf($text['author'], $userdata->display_name) . $after;  
  
		} elseif ( is_404() ) {  
			echo $before . $text['404'] . $after;  
		}  
  
		if ( get_query_var('paged') ) {  
			//if ( is_tax() || is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';  
			echo ' ('.__('Page','fom') . ' ' . get_query_var('paged').')';  
			//if (  is_tax() || is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';  
		}  
  
		echo '</div>';  
  
	}  
} // end dimox_breadcrumbs()
	function insert_fb_in_head() {
		global $post;
		if ( !is_singular()) //if it is not a post or a page
			return;
		?>
		<meta property="og:type" content="<?php
			if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"/>
		<?php
		echo '<meta property="og:url" content="' . get_permalink() . '"/>';
		echo '<meta property="og:site_name" content="'. get_bloginfo('name').'"/>';
		echo '<meta property="og:image" content="' . get_thumb($post->ID) . '"/>';
		echo '<meta property="og:title" content="' . get_the_title() . '"/>';
		echo '<meta property="og:description" content="'; 
		echo ht_content_limit(160,strip_tags(get_the_content($post->ID))); echo'" />';
	}
	add_action( 'wp_head', 'insert_fb_in_head', 5 );
	
	function ht_remove_tax_name( $title, $sep, $seplocation ) {
	    if ( is_tax() ) {
	        $term_title = single_term_title( '', false );
	
	        // Determines position of separator
	        if ( 'right' == $seplocation ) {
	            $title = $term_title . " $sep ";
	        } else {
	            $title = " $sep " . $term_title;
	        }
	    }
	    return $title;
	}
	add_filter( 'wp_title', 'ht_remove_tax_name', 10, 3 );
	
	function sleek_get_theme_menu_name($theme_location = false)
	{
		if(!$theme_location) return false;
		 
		$theme_locations = get_nav_menu_locations();
		if(!isset($theme_locations[$theme_location])) return false;
		 
		$menu_obj = get_term($theme_locations[$theme_location],'nav_menu');
		if(!$menu_obj) $menu_obj = false;
		if(!isset($menu_obj->name)) return false;
		 
		return $menu_obj->name;
	}
	function ht_posts_related($max_articles = 8, $max_articles_more = 10, $type_articles = 'thumb', $post_type = 'post', $tax = 'category'){
		global $post;
		$list_post_tag = array($post->ID);
		$array_tag = array(array('tag'=>h2,'number'=>6),array('tag'=>h3,'number'=>12));
		$i_tag = 1;
	    echo '<section id="related-articles" class="articles-related ht-news"><h3 class="widget-title"><span class="name">'.__('Bài viết liên quan').'</span></h3><div class="columns content-news '.$type_articles.'">';
	    $cnt = 0;
		$array_get_post = array($post->ID);   
	    $article_tags = get_the_tags($post->ID);
	    $tags_id = array();
	    if ($article_tags) {
	        foreach ($article_tags as $article_tag) {
	            $tags_id[] = $article_tag->term_id;
	        }
	    }
		$tag_related_posts = new WP_Query(array(
	        									'post__not_in' => $array_get_post,
	        									'post_type' => $post_type,
	        									'posts_per_page' => $max_articles,
	        									'tag__in' => $tags_id
											 ));
	    if ($tag_related_posts->have_posts()) {
	    	while($tag_related_posts->have_posts()):$tag_related_posts->the_post();
				if(isset($array_tag[0]) && !empty($array_tag[0])){
					$tag = (isset($array_tag[0]['tag']) && !empty($array_tag[0]['tag']))? $array_tag[0]['tag']:'h4';
					if(isset($array_tag[0]['number']) && !empty($array_tag[0]['number'])){
						if($i_tag >= (int)$array_tag[0]['number']){
							array_shift($array_tag);
							$i_tag = 1;
						} else $i_tag++;
					}
				} else $tag = 'h4';
				 $array_get_post[] = $post->ID;
	            echo '<div class="entry col-3 child-' . $cnt . '">'; ?>
				<a class="thumb full" href="<?php echo get_permalink($post->ID); ?>">
		         	<img src="<?php echo get_thumb($post->ID); ?>" alt="<?php echo $post->post_title; ?>" />
		        </a>
	            <?php echo '<'.$tag.' class="entry-title"><a href="' . get_permalink($post->ID) . '">';
	            echo $post->post_title . '</a></'.$tag.'></div>';
				$list_post_tag[] = $post->ID;
				$cnt++;
			endwhile;
	    }	
	
	    // Only if there's not enough tag related articles,
	    // we add some from the same category
	    
	    if ($cnt < $max_articles) {
	        
	        $article_categories = $terms = wp_get_post_terms( $post->ID, $tax);
	        $tax_id = array();
	        foreach($article_categories as $category) { 
	            $tax_id[] = $category->term_id;
	        }
	        $cat_related_posts = new WP_Query(array(
	        									'post__not_in' => $array_get_post,
	        									'post_type' => $post_type,
	        									'posts_per_page' => ($max_articles - $cnt),
	        									'tax_query' => array(
																array(
																	'taxonomy' => $tax,
																	'field'    => 'ID',
																	'terms'    => $tax_id,
																)
												)
											 ));
	        
	        if ($cat_related_posts->have_posts()) {
	        	while($cat_related_posts->have_posts()):$cat_related_posts->the_post();
					if(isset($array_tag[0]) && !empty($array_tag[0])){
						$tag = (isset($array_tag[0]['tag']) && !empty($array_tag[0]['tag']))? $array_tag[0]['tag']:'h4';
						if(isset($array_tag[0]['number']) && !empty($array_tag[0]['number'])){
							if($i_tag >= (int)$array_tag[0]['number']){
								array_shift($array_tag);
								$i_tag = 1;
							} else $i_tag++;
						}
					} else $tag = 'h4';
					echo '<div class="post entry col-4 child-' . $cnt . '">'; ?>
						<a class="thumb" href="<?php echo get_permalink($post->ID); ?>">
				         	<img src="<?php echo get_thumb($post->ID); ?>" alt="<?php echo $post->post_title; ?>" />
				        </a>
		            <?php echo '<'.$tag.' class="entry-title"><a href="' . get_permalink($post->ID) . '">';
		            echo $post->post_title . '</a></'.$tag.'></div>';
					$list_post_tag[] = $post->ID;
				endwhile;
				wp_reset_postdata();
	        }
	    }
	    
	    echo '</div></section>';

		$categories = get_the_category($post->ID);
	    if ($categories)
	    {
			$category_ids = array();
	        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	 
	        $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => $list_post_tag,
		        'posts_per_page'=> $max_articles_more
	        );	
	        $my_query = new wp_query($args);
	        if( $my_query->have_posts() )
	        {
	        	echo '<section class="highlight articles-related ht-news"><h3 class="widget-title"><span class="name">'.__('Bài viết cùng chuyên mục','ht').'</span></h3>';
					echo '<div class="content-news small">';
					$count_sub_related = 0;
					echo '<div class="featured">';
					while ($my_query->have_posts()) : $my_query->the_post();
						if(isset($array_tag[0]) && !empty($array_tag[0])){
							$tag = (isset($array_tag[0]['tag']) && !empty($array_tag[0]['tag']))? $array_tag[0]['tag']:'h3';
							if(isset($array_tag[0]['number']) && !empty($array_tag[0]['number'])){
								if($i_tag >= (int)$array_tag[0]['number']){
									array_shift($array_tag);
									$i_tag = 1;
								} else $i_tag++;
							}
						} else $tag = 'h3';
						if(!$count_sub_related){
						?>
							<div <?php echo post_class('entry has-thumb'); ?>>
								<a class="thumb small" href="<?php the_permalink(); ?>">
						         	<img itemprop="image" src="<?php echo get_thumb($POST->ID); ?>" alt="<?php the_title(); ?>" />
						        </a>
								<<?php echo $tag; ?> class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></<?php echo $tag; ?>>
								<div class="excerpt" itemprop="description"itemprop="description"><?php the_excerpt(); ?></div>
							</div>
						<?php 
						} else {
							if($count_sub_related == 1) echo '</div><div class="readmore">';
					?>
						<div <?php echo post_class('entry'); ?>>
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						</div>
					<?php 		
						}
					$count_sub_related++;
					endwhile;
						echo '</div>';
					echo '</div>';
				echo '</section>';
			}
		}
	}
	function ht_posted_on($post_meta = array('author' => 1, 'date' => 1, 'comments' => 1)) {
	
	  $time_string = '<a href="%1$s" title="%2$s" rel="bookmark"><time itemprop="datePublished" content="%4$s" class="entry-date published updated" datetime="%3$s">%4$s</time></a>';
	
		$time_string = sprintf( $time_string,
	        esc_url( get_permalink() ),
	        esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);    
	
	    $num_comments = get_comments_number();
	    if ( comments_open() ) {
	        if ( $num_comments == 0 ) {
	            $comments = __('0 bình luận','ht');
	        } elseif ( $num_comments > 1 ) {
	            $comments = $num_comments . __(' Bình luận','ht');
	        } else {
	            $comments = __('1 Bình luận','ht');
	        }
	    } else {
	        $comments =  __('Bình luận tắt','ht');
	    }
	
		$comments_string = '<a href="%1$s"> %2$s</a>';
	
		$comments_string = sprintf( $comments_string,
			esc_url( get_comments_link() ),
			esc_html( $comments )
		);    
	
	    $author_string = '<span class="author vcard"><a href="%1$s" title="%2$s" rel="author" class="fn"><span itemprop="author" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">%3$s</span></span</a></span>';
	    
	    $author_string = sprintf( $author_string,
	        /* translators: this text appears next to author name */
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'ht' ), get_the_author() ) ),
			get_the_author()
	    );
	    $meta_data = array();
	
	    if ( $post_meta && is_array( $post_meta ) ) {
	        $display_author = $post_meta['author'];
	        $display_date = $post_meta['date'];
	        $display_comments = $post_meta['comments'];
	    }
	    else {
	        $display_author = 1;
	        $display_date = 1;
	        $display_comments = 1;
	    }
	
	    
	    if ( $display_author )
	        $meta_data[] = $author_string;
	
	    if ( $display_date )
	        $meta_data[] = $time_string;
	
	    if ( $display_comments )
	        $meta_data[] = $comments_string;
	    print( implode( '', $meta_data) );
	    
	}

	function ht_post_meta() {
	
	    /* translators: used between list items, there is a space after the comma */
	    $category_list = get_the_category_list( __( ', ', 'ht' ) );
	
	    /* translators: used between list items, there is a space after the comma */
	    $tag_list = get_the_tag_list( '', __( ', ', 'ht' ) );
	
	    if ( ! ht_categorized_blog() ) {
	        // This blog only has 1 category so we just need to worry about tags in the meta text
	        if ( '' != $tag_list ) {
	            $meta_text = '<div class="pricetag">'.__( 'Tags: %2$s', 'ht' ).'</div>';
						
						
	        }
	
	    } else {
	        // But this blog has loads of categories so we should probably display them here
	        if ( '' != $tag_list ) {
	            $meta_text = '<p class="categories">'.__( 'Xem thêm về: %1$s', 'ht' ).'</p>';
				$meta_text .= '<p class="tags">'.__( 'Tags: %2$s', 'ht' ).'</p>';
	        } else {
	            $meta_text = '<p class="categories">'.__( 'Xem thêm về: %1$s', 'ht' ).'</p>';
	        }
	
	    } // end check for categories on this blog
	
	    printf(
	        $meta_text,
	        $category_list,
	        $tag_list
	    );
	}
	function ht_categorized_blog() {
		if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
			// Create an array of all the categories that are attached to posts
			$all_the_cool_cats = get_categories( array(
				'hide_empty' => 1,
			) );
	
			// Count the number of categories that are attached to the posts
			$all_the_cool_cats = count( $all_the_cool_cats );
	
			set_transient( 'all_the_cool_cats', $all_the_cool_cats );
		}
	
		if ( '1' != $all_the_cool_cats ) {
			// This blog has more than 1 category so ht_categorized_blog should return true
			return true;
		} else {
			// This blog has only 1 category so ht_categorized_blog should return false
			return false;
		}
	}
	function wp_corenavi() {  
		global $wp_query, $wp_rewrite;  
		$pages = '';  
		$max = $wp_query->max_num_pages;  
		if (!$current = get_query_var('paged')) $current = 1;  
		$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));  
		$a['total'] = $max;  
		$a['current'] = $current;  
	  
		$total = 1; //1 - display the text "Page N of N", 0 - not display  
		$a['mid_size'] = 5; //how many links to show on the left and right of the current  
		$a['end_size'] = 1; //how many links to show in the beginning and end  
		$a['prev_text'] = '<i class="fa fa-angle-left"></i>'; //text of the "Previous page" link  
		$a['next_text'] = '<i class="fa fa-angle-right"></i>'; //text of the "Next page" link  
	  
		if ($max > 1) echo '<div class="navigation">';  
		if ($total == 1 && $max > 1) $pages = '<span class="pages">'. sprintf( __('Page %s of %s','ht'), $current , $max ). '</span>';
		if($current != 1){  
		  $pages .= " <a class='first' href=" . get_pagenum_link(1) . " title=".__('First','ht')."><i class='fa fa-angle-double-left'></i></a>";  
		} 
		$pages .= paginate_links($a);  
		if($current != $max){  
		  $pages .= "<a class='last' href=" . get_pagenum_link($max) . " title=".__('Last','ht')."><i class='fa fa-angle-double-right'></i></a>";  
		}  
		echo $pages;
		if ($max > 1) echo '</div>';  
	}
	add_filter('pre_get_posts','query_post_type');
	function query_post_type($query) {
	  if(is_tag()) {
	    $post_type = get_query_var('post_type');
		if(isset($query->query['tag'])){
		    $post_type = array('post','abroad','lesson','document');
	   		$query->set('post_type',$post_type);
		}
		return $query;
	    }
	}
	function ht_create_menu_duhoc(){
		if(is_tax()){
			global $wp_query;
    		$term =	$wp_query->queried_object;
			if($term->taxonomy == 'abroad_category'){
				$parent = $term;
			}
		} elseif(is_single()){
			global $wp_query;
    		$post =	$wp_query->queried_object;
    		if($post->post_type == 'abroad'){
				$term = wp_get_post_terms( $post->ID, 'abroad_category' );
				if(isset($term[0])){
					$parent = $term[0];
				}
			}
		}
		if(isset($parent)){ 
			while($parent->parent){
				$parent = get_term( $parent->parent,'abroad_category'); 
			}
			echo '<aside class="widget">';
			echo '<h3 class="widget-title">'.'Danh mục liên quan'.'</h3>';
			echo '<ul class="menu">';			
			//var_dump($parent);
			//echo $parent->term_id;
			$args = array(
							'post_type' => 'abroad',
							'orderby'   => 'meta_value_num',
							'meta_key'  => 'ht_post_order',
							'order'     => 'ASC',
							'tax_query' => array(
										array(
											'taxonomy' => 'abroad_category',
											'field'    => 'term_id',
											'terms'    => array($parent->term_id),
										),
									),
							);
				
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<li><a href="'.get_the_permalink().'">' . get_the_title() . '</li>';
					}
				} 
				wp_reset_postdata();
				$terms = get_terms( 'abroad_category', array(
														'parent'     => $parent->term_id,
													 	'orderby'    => 'id',
													 	'hide_empty' => 0,
													 ) );
				 foreach ( $terms as $term ) {
       					echo '<li><a href="'.get_term_link( $term, 'abroad_category' ).'">' . $term->name . '</a></li>';
        
     }
				 echo '</ul>';
					echo'</aside>';
		}
	}
	add_action('menu_duhoc','ht_create_menu_duhoc');
	