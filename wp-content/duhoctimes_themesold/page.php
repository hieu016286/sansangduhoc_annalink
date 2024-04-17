<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sugar & Spice
 */

get_header(); ?>

	<div id="primary" class="content-area">
			<?php if(function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
					<footer class="entry-meta bottom">
						
						<?php ht_post_meta(); ?>
						<div class="socials-single">
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
							<a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
							<div class="g-plusone" data-size="medium"></div>
						</div>
					</footer><!-- .entry-meta -->
					<?php if(have_comments() || comments_open()){ ?>
					<div id="comment" class="clear"></div> 
					<div class="cmt-facebook">
						
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;s
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="685px" data-height="90px" data-numposts="10" data-colorscheme="light"></div>
					</div> 
					<div class="comments_template"><?php comments_template('',true); ?></div>
				<?php } ?>

			<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->
	<?php 
do_action( 'before_sidebar' ); ?>

<div id="sidebar" class="widget-area" role="complementary">
<?php get_sidebar(); ?>
<?php get_footer(); ?>
