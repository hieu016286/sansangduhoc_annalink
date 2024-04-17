<div id="htlatest" class="level1">
	<h3 class="widget-title"><a href="<?php echo get_category_link(5) ?>"><?php echo get_cat_name(5) ?></a></h3>
	<ul>
		<?php 
			$home_news_cat = get_option( 'ht_option_latest_category' )? get_option( 'ht_option_latest_category' ):array();
			$recent_news = new WP_Query( array(
											'showposts' => 4, 
											'cat' => implode((array)$home_news_cat,','),
											'meta_key' => 'ht_post_latest',
											'orderby'  => array( 'meta_value' => 'DESC', 'date' => 'DESC' ) )); 
			global $post;
			while($recent_news->have_posts()) : $recent_news->the_post();
		?>
		<li <?php post_class('entry'); ?>>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<?php $num_cm = get_comments_number( $post->ID ); if(comments_open() && $num_cm > 0) { ?>
				<a href="<?php the_permalink(); ?>/#comment" class="comment-count"><i class="fa fa-comment"></i><?php echo $num_cm ?></a>
			<?php } ?>		
			<span class="postdate"><?php the_time('m/d') ?></span>
		</li>
		<?php endwhile; wp_reset_query(); ?>
	</ul>
</div> <!--end #latest-->