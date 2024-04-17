<?php
/**
 * @package Sugar & Spice
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('news entry hentry'); ?>>
	<div class="avatar" style="height: 60px; width: 60px;">						            
        <a class="thumb" href="<?php the_permalink(); ?>">
         	<img src="<?php echo get_thumb($POST->ID); ?>" alt="<?php the_title(); ?>" />
        </a>
    </div> <!-- cd-timeline-img -->
    <div class="timeline-content" style="margin-left: 30px; padding-left: 40px; ">
        <header class="entry-header">
        	<?php global $tag; ?>
        	<<?php echo $tag; ?> class="entry-title post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); echo (strtotime(date('Y-m-d')) <= get_the_time('U', $POST->ID))? "<span class='latestnew'></span>":''; ?></a></<?php echo $tag; ?>>
        </header>
        <?php echo '<div class="excerpt">'; the_excerpt(); echo '</div>'; ?>
        <span class="cd-date"></span>
       	<ul class="entry-meta">
       		<li class="author"><span class="fa-user fa"></span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="me"><?php the_author(); ?></a></li>
       		<li class="date-time"><span class="fa-calendar fa"></span><span class="date"><?php echo get_the_date(); ?></span></li>
			<?php if($instance['show_more']){ ?><li class="read-more right"><a href="<?php the_permalink(); ?>"><span class="fa-angle-right fa"></span><?php _e('Read more','fom'); ?></a></li><?php } ?>
			<?php
			    if ( comments_open() ) { 
			    	$num_comments = get_comments_number();	
			    ?>
			    	<li class="comment right">
			    		<span class="fa-comment-o fa"></span>
			    		<span><?php echo $num_comments; ?></span>
			    	</li>
			    <?php
			    }
			?> 
			<li class="thanks right">
			<?php
				echo getPostLikeLink( $post->ID );
			?> 
			</li>
       	</ul>
    </div> <!-- cd-timeline-content -->
</article><!-- #post-## -->