<?php
get_header(); ?>
	<div id="primary" class="content-area category">  
		<?php if(function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		<?php if ( have_posts() ) :
			global $wp_query;
    		$term =	$wp_query->queried_object; ?>			
			<!--<header class="page-header ht-news">
				<h1 class="page-title widget-title"><span class="name">
					<?php echo (isset($term->label) && !empty($term->label))? $term->label:$term->name; ?>
					</span>
				</h1>
				<?php
					// Show an optional term description.
					/*$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;*/
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */
				$array_tag = array(array('tag'=>'h2','number'=>6),array('tag'=>'h3'));				
				global $tag;
			?>
			<section class="archives content-news">
				<?php
				$categories = get_terms( 'abroad_category', 'orderby=count&order=DESC&hide_empty=0&parent=0' );
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
							'post_type' => 'abroad',
							'orderby'   => 'meta_value_num',
							'meta_key'  => 'ht_post_order',
							'order'     => 'ASC',
							'posts_per_page'=>5,
							'tax_query' => array(
								array(
									'taxonomy' => 'abroad_category',
									'field'    => 'all',
									'terms'    => $cat->term_id,
								),
							),
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
				      <!--  <a class="more-link entry-meta" href="<?php echo get_term_link($cat); ?>">[<?php _e('Readmore...', 'ht'); ?>]</a>-->
				        
						
					
				</div><!-- .entry-summary -->
				
			</article>
			<?php } ?>
		<?php //while ( have_posts() ) : the_post(); ?>
			<!--	<?php
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
				<article id="post-<?php the_ID(); ?>" <?php post_class('excerpt entry hentry'); ?>>
				    
					<header class="entry-header">
						<<?php echo $tag; ?> class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></<?php echo $tag; ?>>
						<?php $num_cm = get_comments_number( $post->ID ); if(comments_open() && $num_cm > 0) { ?>
							<a href="<?php the_permalink(); ?>/#comment" class="comment-count"><i class="fa fa-comment"></i><?php echo $num_cm ?></a>
						<?php } ?>
					</header><!-- .entry-header -->
				
				<!--	<div class="entry-summary">
						<a class="thumb" href="<?php echo get_permalink($post->ID); ?>">
				         	<img src="<?php echo get_thumb($post->ID); ?>" alt="<?php echo $post->post_title; ?>" />
				         	<?php
				         	if(get_post_meta($post->ID,'ht_post_video', true))
										echo '<div class="btn-video"></div>';
							?>
				        </a>
						<?php echo get_the_excerpt(); ?>
				        <a class="more-link entry-meta" href="<?php the_permalink(); ?>">[<?php _e('Readmore...', 'ht'); ?>]</a>
				        <div class="pricetag">
						<?php
						echo get_the_tag_list('<p>',' ','</p>');
						?>
						</div>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'fom' ),
								'after'  => '</div>',
							) );
						?>
					
					</div><!-- .entry-summary -->
				
			<!--	</article><!-- #post-## -->

			<?php// endwhile; ?>
			</section>
			<style type="text/css">
           		.archive .content-news:before{
           			left: 30px;
           		}
           		.archive .content-news .news{
           			min-height: 60px;
           		}
           </style>  
			<?php //if(function_exists('wp_corenavi')) wp_corenavi(); ?>

		<?php else : ?>

			<?php // get_template_part( 'no-results', 'archive' ); 
					echo __('Đang cập nhật...','fom' );
			?>
		<?php endif; ?>

	</div><!-- #primary -->
<?php 
do_action( 'before_sidebar' ); ?>

<div id="sidebar" class="widget-area" role="complementary">
<?php	$args = array(
						  'taxonomy'     => 'abroad_category',
						  'hierarchical' => 1,
						  'title_li'     => '',
						  'hide_empty'   => 0,
						  'echo'   		 => 0,
						  'child_of' 	=>	$idmain,
						  'show_option_none' =>'',
						  
					); 
			$categories = wp_list_categories( $args );		
		if($categories)
		{
			echo '<aside class="widget">';
			echo '<h3 class="widget-title">'.'Danh mục liên quan'.'</h3>';
			echo '<ul class="menu">';
			echo $categories;
			echo '</ul>';
			echo '</aside>';
		}
		get_sidebar();
		 ?>
<?php get_footer(); ?>