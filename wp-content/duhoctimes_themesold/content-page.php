<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sugar & Spice
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-header">
				<h1 class="page-title widget-title"><span class="name">
					<?php the_title(); ?>
					</span>
				</h1>
			</header>
	<div class="entry-content">
		<?php the_content(); ?>
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
	</div><!-- .entry-content -->
	<?php //edit_post_link( __( 'Edit', 'fom' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
