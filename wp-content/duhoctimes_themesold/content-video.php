<?php
/**
 * @package Sugar & Spice
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
        $link_video = get_post_meta($post->ID, 'fom_video_link', true);
        if(!empty($link_video)){
        	$read_link = parse_url($link_video);
            $root_domain = get_bloginfo('url');
            if(isset($read_link['host']) && (strpos($link_video,$root_domain) !== false)){//in_array($read_link['host'],array($root_domain,'www.'.$root_domain,'http://'.$root_domain,'http://www.'.$root_domain,'https://'.$root_domain,'https://www.'.$root_domain))	
            	preg_match('/(.*)\.+(.*)$/',$link_video,$extfile);					
            	$html_video_embed = do_shortcode('[video width="560" height="315" '.$extfile[3].'="'.$link_video.'"][/video]');
            }elseif(isset($read_link['host']) && (strpos($link_video,'youtube.com') !== false)){ // && in_array($read_link['host'],array('youtube.com','www.youtube.com'))
                $queryvar = isset($read_link['query'])? $read_link['query']:'';			
                parse_str($queryvar, $data_link);
                if(isset($data_link['v']) && !empty($data_link['v'])){
                     $html_video_embed = '<object width="560" height="315"><param name="movie" value="//www.youtube-nocookie.com/v/'.$data_link['v'].'?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="autoplay" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube-nocookie.com/v/'.$data_link['v'].'?version=3&amp;hl=en_US&amp;rel=0&amp;autoplay=1" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
                }
            }
        }
    ?>
	<div class="embed-video video">
         <?php if(isset($html_video_embed)) echo $html_video_embed; ?>
    </div>
	
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<?php fom_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="post-meta">
        <div class="rating">
            <?php if(function_exists('spr_show_rating')) echo spr_show_rating(); ?>
        </div>
        <div class="post-view">
             <?php setPostViews($post->ID); ?>
             <span class="title"><?php _e('Views: ','fom'); echo '<span class="value view">'.getPostViews($post->ID).'</span>';?></span>
         </div>
    </div>
	<div class="entry-content">
        <?php the_content( __('Continue reading &rarr;', 'fom') ) ?>
        <?php
			$source = get_post_meta(get_the_ID(), 'post_from_link', true);
			if($source) echo '<p class="source">Theo: <span>'.$source.'</span></p>';
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta bottom">
		
		<?php fom_post_meta(); ?>

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
