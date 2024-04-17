<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_home()) { echo get_bloginfo('name').' | '.get_bloginfo('description'); } else { wp_title('',true); } ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 
    
    <?php  if ( function_exists('of_get_option') && of_get_option( 'favicon' ) ) echo '<link rel="shortcut icon" href="'.esc_url( of_get_option( 'favicon' ) ).'" />'; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class('hfeed site'); ?>>
	<?php do_action( 'before' ); ?>
	<div class="top_header">
		<div class="top fix-width">
			<div class="top-left">
				<div class="hotline"><span><?php echo of_get_option('ht_option_hotline','#'); ?></span></div>
				<div class="email"><a href="mailto:<?php echo of_get_option('ht_option_email','#'); ?>"><?php echo of_get_option('ht_option_email','#'); ?></a></div>
			</div>
			<div id="top-menu">
			<?php wp_nav_menu( array( 'container' => 'nav', 'container_id' => 'top-menu-header', 'theme_location' => 'top_menu') ); ?>
			<!--<div class="right">
				<ul class="socials">
	        		<li><a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" title="RSS" class="rssfeed"><i class="fa fa-rss"></i></a></li>
		        	<li><a target="_blank" href="<?php echo esc_url( of_get_option('ht_option_social_facebook') ); ?>" title="<?php echo __('Facebook','ht'); ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
		        	<li><a target="_blank" href="<?php echo esc_url( of_get_option('ht_option_social_google_plus') ); ?>" title="<?php echo __('Google Plus','ht'); ?>" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
		        	<li><a target="_blank" href="<?php echo esc_url( of_get_option('ht_option_social_youtube') ); ?>" title="<?php echo __('Youtube','ht'); ?>" class="youtube"><i class="fa fa-youtube"></i></a></li>
		        	<li><a target="_blank" href="<?php echo esc_url( of_get_option('ht_option_social_twitter') ); ?>" title="<?php echo __('Twitter','ht'); ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
	      </ul>
	    		
			</div>-->
		</div>
		</div>
		
	</div>
	<header id="header" class="site-header " role="banner">
		<div class="site-branding fix-width">	
			<div class="logo">	
	        	<?php  $logo_src = (function_exists('of_get_option') && of_get_option('ht_option_logo_image'))? esc_attr( of_get_option('ht_option_logo_image') ):get_bloginfo('template_url')."/images/logo.png" ;?>
	        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo $logo_src;?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
        		<!--<div class="info">
	        		<div class="hotline"><span><?php echo of_get_option('ht_option_hotline','#'); ?></span></div>
					<div class="email"><a href="mailto:<?php echo of_get_option('ht_option_email','#'); ?>"><?php echo of_get_option('ht_option_email','#'); ?></a></div>
	        		<div class="address"><span><?php echo of_get_option('ht_option_address','#'); ?></span></div>
        		</div>-->
        		<div class="op">
        			<a class="op_bt newest" href="<?php echo esc_url( home_url( '/' ) )?>tin/">Mới nhất</a>
        			<a class="op_bt search" href="<?php echo esc_url( home_url( '/' ) )?>?s="></a>
        			<span class="op_bt menu-mobile">
        				
        			</span>
        			
        		</div>
        	</div>
        	<div class="group_adv">
	        	<?php echo apply_filters('the_content', of_get_option('ht_option_adv_header')); ?>
	        	
        	</div>
        	
			<!--<?php if (is_home()) { ?>		
	        	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	        	<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	        <?php } else { ?>
		    	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		    	<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	        <?php } ?>-->
        </div>
	</header><!-- #header -->
	<div class="overlay-background"></div>
					<nav id="mobile-menu">
						<?php 
            if(has_nav_menu('primary')){
                wp_nav_menu( array( 
                    'theme_location'=> 'primary', 
                    'container'     => false,
                    'menu_id'       => 'nav',
                    'fallback_cb'   => 'wp_page_menu' 
                ) ); 
            } else {
            ?>
                <ul id="nav">
                    <?php wp_list_pages('title_li='); ?>
                </ul>
            <?php
            }
            ?>
					</nav>
	<div id="nav-wrapper" role="navigation">
        <nav id="main-nav"  class="main-navigation fix-width" role="navigation">
        	<!--<div class="show-menu nav_trigger"><span class="fa fa-bars"></span></div>-->
            <?php 
            if(has_nav_menu('primary')){
                wp_nav_menu( array( 
                    'theme_location'=> 'primary', 
                    'container'     => false,
                    'menu_id'       => 'nav',
                    'fallback_cb'   => 'wp_page_menu' 
                ) ); 
            } else {
            ?>
                <ul id="nav">
                    <?php wp_list_pages('title_li='); ?>
                </ul>
            <?php
            }
            ?>
        </nav>
        
    </div>
	<div  class=" wapper fix-width"> 
		<div id="main" class="site-main" role="main">
		<div class="ads">
			<div class="ads_left">
				<ul class="newestpost">
					<?php
						$recent_posts = wp_get_recent_posts('numberposts=2');
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
				</ul>
			</div>
			
        		<?php
        			//echo apply_filters('the_content', of_get_option('ht_option_adv_right_slide'));
					get_search_form();
        		?>

        </div>