<?php
/*
	Template Name: Homepage & Blocks (Advanced)
*/

get_header();


if (Bunyad::posts()->meta('featured_slider')):
	get_template_part('partial-sliders');
endif;
?>

<div class="main wrap cf">

	<div class="row">
	<?php // add By Bach 14/5/2020 
		if (is_front_page()) { ?>
			<div class="col-12 slider_test">
			<?php
				$your_query = new WP_Query( array( 'page_id' => 119043 ) );
				// "loop" through query (even though it's just one page) 
				while ( $your_query->have_posts() ) : $your_query->the_post();
					Bunyad::posts()->the_content();
				endwhile;
				// reset post data (important!)
				wp_reset_postdata();
			?>
			</div>
		<?php }
		// end add
		?>
		<div class="col-8 main-content">
			
			<?php if (have_posts()): the_post(); endif; // load the page ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>

			<?php if (Bunyad::posts()->meta('page_title') != 'no'): ?>
			
				<header class="post-header">				
					
				<?php if (has_post_thumbnail()): ?>
					<div class="featured">
						<a href="<?php $url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo $url[0]; ?>" title="<?php the_title_attribute(); ?>">
						
						<?php if ((!in_the_loop() && Bunyad::posts()->meta('layout_style') == 'full') OR Bunyad::core()->get_sidebar() == 'none'): // largest images - no sidebar? ?>
						
							<?php the_post_thumbnail('main-full', array('title' => strip_tags(get_the_title()))); ?>
						
						<?php else: ?>
							
							<?php the_post_thumbnail('main-slider', array('title' => strip_tags(get_the_title()))); ?>
							
						<?php endif; ?>
						
						</a>
					</div>
				<?php endif; ?>
				
					<h1 class="main-heading">
						<?php the_title(); ?>
					</h1>
				</header><!-- .post-header -->
				
			<?php endif; ?>
		
						
			<?php Bunyad::posts()->the_content(); ?>


			</div>
			
		</div>
		
		<?php Bunyad::core()->theme_sidebar(); ?>
		
	</div> <!-- .row -->
</div> <!-- .main -->

<?php get_footer(); ?>
