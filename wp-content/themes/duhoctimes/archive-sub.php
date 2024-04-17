<?php

/**
 * Archives Page!
 * 
 * This page is used for all kind of archives from custom post types to blog to 'by date' archives.
 * 
 * Bunyad framework recommends this template to be used as generic template wherever any sort of listing 
 * needs to be done.
 * 
 * Types of archives handled:
 * 
 *  - Categories
 *  - Tags
 *  - Taxonomies
 *  - Date Archives
 *  - Custom Post Types
 * 
 * @link http://codex.wordpress.org/images/1/18/Template_Hierarchy.png
 */

global $bunyad_loop_template;

get_header();

// no template set?
if (empty($bunyad_loop_template)) {
	
	$template = Bunyad::options()->archive_loop_template;
	
	// modern loop template is loop.php (default)
	if (!empty($template)) {
		
		if (!strstr($template, 'modern')) {
			$bunyad_loop_template = 'loop-' . str_replace('-3', '', $template);
		}
		
		if (strstr($template, '-3')) {
			Bunyad::registry()->loop_grid = 3;
		}
	}
}

// slider for categories
if (is_category()) {
	$meta = Bunyad::options()->get('cat_meta_' . get_query_var('cat'));
	get_template_part('partial-sliders');
}

// enqueue the infinite scrol js if needed
if (Bunyad::options()->pagination_type == 'infinite') {
	wp_enqueue_script('smartmag-infinite-scroll');
}

?>

<div class="main wrap cf">
	<div class="row">
		<div class="col-8 main-content">
		<?php if ( have_posts() ) :
			global $wp_query;
    		$term =	$wp_query->queried_object; ?>			
			<?php /* Start the Loop */
				$array_tag = array(array('tag'=>'h2','number'=>6),array('tag'=>'h2'));				
				global $tag;
			?>
			<section class="archives content-news">
				<?php
				$current_cat = get_queried_object();
				$categories = get_terms( 'category', 'orderby=count&order=DESC&hide_empty=0&parent='.$current_cat->term_id.'&child_of='.$current_cat->term_id);
				foreach($categories as $cat)
				{
	        	if(isset($array_tag[0]) && !empty($array_tag[0])){
					$tag = (isset($array_tag[0]['tag']) && !empty($array_tag[0]['tag']))? $array_tag[0]['tag']:'h3';
					if(isset($array_tag[0]['number']) && !empty($array_tag[0]['number'])){
						if($i_tag >= (int)$array_tag[0]['number']){
							array_shift($array_tag);
							$i_tag = 1;
						} else $i_tag++;
					}
				} else $tag = 'h3';
				?>
				<article id="cat-<?php echo $cat->term_id; ?>" <?php post_class('excerpt term entry hentry'); ?>>
				<div class="entry-summary">
						<a class="thumb" href="<?php echo get_term_link($cat); ?>">
				         	<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" alt="<?php echo $cat->name; ?>" />
				        </a>
				        <header class="entry-header">
						<<?php echo $tag; ?> class="entry-title"><a href="<?php echo get_term_link($cat); ?>" rel="bookmark"><?php echo $cat->name; ?></a></<?php echo $tag; ?>>
						</header><!-- .entry-header -->
						<?php
						 $args = array(
							'post_type' => 'post',
							'order'     => 'ASC',
							'posts_per_page'=>5,
							'cat' => $cat->term_id,
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) {
							echo '<ul class="list">';
							while ( $query->have_posts() ) {
								$query->the_post();
								echo '<li><a href="'.get_permalink().'">';
								echo get_the_title() ;
								?>
								<!--<div class="pricetag">
									<?php
									echo get_the_tag_list('<p>',' ','</p>');
									?>
								</div>-->
								<?php
								echo '</a></li>';
							}
							echo '</ul>';
						} 
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</div><!-- .entry-summary -->
				
			</article>
			<?php } ?>
			</section>
		<?php else : ?>

			<?php // get_template_part( 'no-results', 'archive' ); 
					echo __('Đang cập nhật...','fom' );
			?>
		<?php endif; ?>
		</div>
		<?php 
		do_action( 'before_sidebar' ); 
		?>


		<?php	
		$args = array(
		  'taxonomy'     => 'category',
		  'hierarchical' => 1,
		  'title_li'     => '',
		  'hide_empty'   => 0,
		  'echo'   		 => 0,
		  'child_of' => $current_cat->term_id,
		  'parent' => $current_cat->term_id,
		  'show_option_none' =>'',
								  
		); 
		$categories = wp_list_categories( $args );		
		if($categories)
		{
			echo '<aside class="col-4 sidebar">';
			echo '<h3 class="widget-title scholarship-form">'.'Danh mục liên quan'.'</h3>';
			echo '<ul class="menu sub-category">';
			echo $categories;
			echo '</ul>';
			echo '</aside>';
		}
		?>

		<?php Bunyad::core()->theme_sidebar(); ?>
		<?php //Bunyad::core()->theme_sidebar('sub-category'); ?>
		
	</div> <!-- .row -->
</div> <!-- .main -->

<?php get_footer(); ?>