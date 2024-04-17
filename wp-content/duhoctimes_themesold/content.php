<?php
/**
 * @package Sugar & Spice
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php ht_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php the_content( __('Continue reading &rarr;', 'ht') ) ?>
        <?php
	    	$source = get_post_meta(get_the_ID(), 'post_from_link', true);
			if($source) echo '<p class="source">Theo: <span>'.$source.'</span></p>';
	    ?>
	</div><!-- .entry-content -->
    
	<footer class="entry-meta bottom">
		
		<?php ht_post_meta(); ?>
		<div class="socials-single">
			<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
			<a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
			<div class="g-plusone" data-size="medium"></div>
		</div>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
