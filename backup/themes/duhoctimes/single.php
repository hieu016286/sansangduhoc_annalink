<?php 

/**
 * The single post template is selected based on your global Theem Settings or the post 
 * setting. 
 * 
 * Template files for the post layouts are as follows:
 * 
 * Classic: Located below in the code conditional
 * Post Cover: partials/single/layout-cover.php
 */

$template = Bunyad::posts()->meta('layout_template');

if (!$template OR strstr($template, 'classic')) {
	$template = 'classic';
}

if ($template != 'classic') {
	Bunyad::core()->add_body_class('post-layout-' . $template);
}

?>

<?php get_header(); ?>

<div class="main wrap cf">

	<?php if ($template != 'classic'): // not the default layout? ?>
		
		<?php get_template_part('partials/single/layout-' . $template); ?>
	
	<?php else: ?>
	
	<div class="row">
	
		<div class="col-8 main-content">
		
			<?php while (have_posts()) : the_post(); ?>
	
				<?php 
					
					$panels = get_post_meta(get_the_ID(), 'panels_data', true);
					
					if (!empty($panels) && !empty($panels['grid'])):
						
						get_template_part('content', 'builder');
					
					else:
					
						get_template_part('content', 'single');
						
					endif; 
				?>
	
				<div class="comments">
				<?php comments_template('', true); ?>
				</div>
	
			<?php endwhile; // end of the loop. ?>
	
		</div>
		<?php 
		$cat = get_the_category( get_the_ID());
		$show_menu = false;
		foreach($cat as $category){
			if(in_array($category->term_id,array(185))){
				//$show_menu = true;
			}
		}
		if($show_menu):
		?>
		<?php 
		do_action( 'before_sidebar' ); 
		?>	
		<?php
		
		$args = array(
			'post_type' => 'post',
			'order'     => 'ASC',
			'posts_per_page'=>5,
			'cat' => 185,
		);
		$query = new WP_Query( $args );	
		if($query->have_posts())
		{
			echo '<aside class="col-4 sidebar">';
			echo '<h3 class="widget-title scholarship-form">'.'Danh mục liên quan'.'</h3>';
			echo '<ul class="menu sub-category '.$cat->term_id.'">';
			while ( $query->have_posts() ) {
				$query->the_post();
				echo '<li><a href="'.get_permalink().'">';
				echo get_the_title() ;
				echo '</a></li>';
			}
			echo '</ul>';
			echo '</aside>';
		}
		?>
		<?php endif;?>
		
		<?php Bunyad::core()->theme_sidebar(); ?>
	
	</div> <!-- .row -->
		
	<?php endif; ?>

</div> <!-- .main -->

<?php get_footer(); ?>