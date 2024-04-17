<div id="feature" class="flexslider">
	<ul class="slides">
		<?php 
			$num_featured = 3;
			$home_featured_cat = get_option( 'ht_option_featured_category' )? get_option( 'ht_option_featured_category' ):array();
			$recent = new WP_Query( array(
										'posts_per_page' => $num_featured, 
										'cat' => implode((array)$home_featured_cat,','),
					                    'meta_key' => 'ht_post_feature',
										'orderby'  => array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
										) 
									); 
			global $post;
			while($recent->have_posts()) :$recent->the_post();
		?>
		<li <?php post_class('slide entry'); ?> id="slider-<?php the_ID(); ?>" data-thumb="<?php echo get_thumb($post->ID); ?>">
			<a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
				<img src="<?php echo get_thumb($post->ID); ?>" alt="<?php the_title(); ?>" />
			</a>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
            	<?php $num_cm = get_comments_number( $post->ID ); if(comments_open() && $num_cm > 0) { ?>
					<a href="<?php the_permalink(); ?>/#comment" class="comment-count"><i class="fa fa-comment"></i><?php echo $num_cm ?></a>
				<?php } ?>
            </h2>
           <!-- <div class="excerpt"><?php the_excerpt(); ?></div>-->
		</li>
		<?php endwhile;
		wp_reset_query(); ?>
	</ul>
</div>