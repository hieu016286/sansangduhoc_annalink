<?php
 /* Template Name: Page search
 
 * The template for displaying Search Results pages.
 *
 * @package Sugar & Spice
 */

get_header(); ?>

	<div id="primary" class="archive content-area ht-news category">
		<?php if(function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'Từ khóa', 'placeholder', 'fom' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<button type="submit" class="search-submit" value="fav_HTML"></button>
</form>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title widget-title"><span class="name"><?php printf( __( 'Kết quả tìm kiếm: %s', 'fom' ), '<span>' . get_search_query() . '</span>' ); ?></span></h1>
			</header><!-- .page-header -->
			<section class="archive-category content-news">
			<?php /* Start the Loop */
			$array_tag = array(array('tag'=>'h2','number'=>6),array('tag'=>'h3'));	 ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
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
					</header><!-- .entry-header -->
				
					<div class="entry-summary">
						<a class="thumb" href="<?php echo get_permalink($post->ID); ?>">
				         	<img src="<?php echo get_thumb($post->ID); ?>" alt="<?php echo $post->post_title; ?>" />
				        </a>
						<?php echo get_the_excerpt(); ?>
				        <a class="more-link entry-meta" href="<?php the_permalink(); ?>"><?php _e('Chi tiết', 'ht'); ?></a>
				        
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
				
				</article><!-- #post-## -->

			<?php endwhile; ?>
			</section>
			<?php if(function_exists('wp_corenavi')) wp_corenavi(); ?>
		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

	 </div><!-- #primary -->
	<?php 
do_action( 'before_sidebar' ); ?>

<div id="sidebar" class="widget-area" role="complementary">
<?php get_sidebar(); ?>
<?php get_footer(); ?>
