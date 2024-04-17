<?php
/**
 * @package Sugar & Spice
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('excerpt cf'); ?>>
    <a class="thumb" href="<?php echo get_permalink($post->ID); ?>">
         	<img src="<?php echo get_thumb($post->ID); ?>" alt="<?php echo $post->post_title; ?>" />
        </a>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		
		<?php echo get_the_excerpt(); ?>
        <a class="more-link entry-meta" href="<?php the_permalink(); ?>"><?php _e('Continue reading &rarr;', 'fom'); ?></a>
        
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fom' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
