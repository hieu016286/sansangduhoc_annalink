
</div>

    <footer class="footer-box">
    	<div class="footer">
		<div class="informations ">
			<?php
				wp_nav_menu( array( 'container' => 'nav', 'container_id' => 'footer-menu', 'menu_class' => 'menu', 'theme_location' => 'footer') );
			?>
		</div>
		<!--<div class="profile">
				<?php echo apply_filters('the_content',of_get_option('ht_option_copyright')); ?>
				
				<?php if ( is_active_sidebar( 'footer' ) ) : ?>	        
     			<?php dynamic_sidebar( 'footer' ); ?>	
				<?php endif; ?>
		</div>-->
		<div class="copyright">
			<div class="social">
    			<a title="Facebook" href="<?php echo of_get_option('ht_option_social_facebook','https://www.facebook.com/bellyang'); ?>" target="_blank" ><i class="fa fa-facebook fb "></i> </a>
    			<a title="Google Plus" href="<?php echo of_get_option('ht_option_social_google_plus','#'); ?>" target="_blank" ><i class="fa fa-google-plus gg "></i></a>
    			<a title="Twitter" href="<?php echo of_get_option('ht_option_social_twiter','#'); ?>" target="_blank" ><i class="fa fa-twitter tw"></i></a>
    			<a title="Youtube" href="<?php echo of_get_option('ht_option_social_youtube','#'); ?>" target="_blank" ><i class="fa fa-youtube yt"></i></a>
    			<a id="go_top" class="go_top" href="#"><i class="fa fa-chevron-up"></i>TOP</a>
    		</div>
			<?php echo apply_filters('the_content',of_get_option('ht_option_copyright')); ?>
			
			<!--<p class="source right"><?php 
			if(function_exists('of_get_option') && of_get_option('ht_option_logo_image'))
				echo '<img src="'.esc_attr( of_get_option('ht_option_logo_image')).'">';
			else echo '<img src="'.get_bloginfo('template_url').'"/images/LOGO.png">' ;?>
			 </p>
			-->
			
		</div>
		<div class="clear"></div>
	<div class="tagcloud">
			<?php $args = array(
						'number'                    => 10,  
						'format'                    => 'array',
						'separator'                 => "\n",
						'orderby'                   => 'count', 
						'order'                     => 'DESC',
				);
			 wp_tag_cloud('$args'); 
			 ?>
		</div>	
		</div>
	</footer>
	</div>
	<p style="text-align: center; font-size: 18px; margin: 0;"><a style="display: inline-block; padding: 5px 10px; margin: 5px; border-radius: 3px; border: 1px solid #eee" href="http://demo.vinaec.com/duhoctimes/design-view/" target="_blank">Design View</a></p>
	<!--<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",22934]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>-->
<div id="push_sidebar">
	<ul class="list-unstyled">
		<li class="close-menu"><a href="#" data-rel="close"><i class="fa fa-close"></i><?php echo __('Close menu','ht'); ?></a></li>
		<li class="<?php if(is_home()) echo 'active'; ?>"><a href="<?php echo get_bloginfo('url'); ?>"><?php _e('Home','ht'); ?></a></li>
		<?php if (!is_user_logged_in()){ ?>
            <li class="active"><a href="<?php bloginfo('url'); ?>/account"><?php _e('Member Login','ht'); ?></a></li>
            <li><a href="<?php bloginfo('url'); ?>/account?action=register"><?php _e('Register','ht'); ?></a></li>
         <?php } else { 
		 	global $fom_account;
			global $current_user;
		 ?>
         	<!--<li><?php echo sprintf(__('Welcome <a href="%s/account"><strong class="username">%s</strong></a>','ht'),$fom_account->site_url,$current_user->display_name); ?></li>-->
            <?php if(current_user_can('administrator') || current_user_can('editor')){ ?>
            	<li class="active"><a href="<?php echo admin_url(); ?>"><?php _e('Admin Page','ht'); ?></a></li>
            	<li><a target="_blank" href="<?php echo get_bloginfo('url'); ?>/hopdong"><?php _e('Manager Customers - Contracts','ht'); ?></a></li>
            <?php } else { ?>
            	<li class="active"><a href="<?php echo get_bloginfo('url').'/account'; ?>"><?php _e('My Profile','ht'); ?></a></li>
            	<li><a href="<?php echo get_bloginfo('url').'/company'; ?>"><?php _e('My Company','ht'); ?></a></li>
            	<li><a href="<?php echo get_bloginfo('url').'/contract'; ?>"><?php _e('View Contracts','ht'); ?></a></li>
            <?php  } ?>
			<li><a href="<?php echo wp_logout_url($fom_account->referrer.'?action=logout&mes=true'); ?>"><?php _e('Logout','ht'); ?></a></li>
         <?php } ?>
		<?php
			$main_menu = wp_nav_menu( array( 'echo' => false, 'container' => '', 'theme_location' => 'primary','items_wrap' => '%3$s') ); 
		    echo str_replace('<ul class="sub-menu">','<span class="sub"></span><ul class="sub-menu">',$main_menu);
		?>
    </ul>
</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css">
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			if ($(".menu-mobile").length) {
            $(".menu-mobile:not(.close-menu-mobile)").click(function () {
                $("body").toggleClass("show-menu-mobile");
                $(".menu-mobile").addClass('close-menu-mobile');
                $(".close-menu-mobile>i").toggleClass("fa-close");
            });
        }
			$('#feature').flexslider({
			    animation: "fade",
			    controlNav: "thumbnails",
			    
			  });
		$(window).scroll(function(){
			{
				if($(this).scrollTop()!=0)
				{
					$('#go_top').fadeIn(500);
				}
				else $('#go_top').fadeOut(500);
			}
		});
	
		$('.go_top').click(function(){
			$('html,body').animate({scrollTop:0},800);
			return false;
		});
		if ($("#list-oval").length) {
		$('#list-oval').flexslider({
		   	animation: "slide",
		   	pauseOnAction: false, 
			pauseOnHover: true,
			itemWidth: 130,
			itemMargin: 40,
			controlNav: false,
			directionNav:true
		});
		}
		if ($("#list-thirdleft").length) {
		$('#list-thirdleft').flexslider({
		   	animation: "slide",
		   	pauseOnAction: false, 
			pauseOnHover: true,
			itemWidth: 111,
			itemMargin: 50,
			controlNav: true,
			directionNav:true
		});
		}
		if ($("#list-thirdright").length) {
		$('#list-thirdright').flexslider({
		   	animation: "slide",
		   	pauseOnAction: false, 
			pauseOnHover: true,
			itemWidth: 111,
			itemMargin: 50,
			controlNav: true,
			directionNav:true
		});
		}
		if ($('.list-sliderside').length) {
		$('.list-sliderside').flexslider({
		   	animation: "slide",
		   	pauseOnAction: false, 
			pauseOnHover: true,
			itemWidth: 269,
			itemMargin:0,
			controlNav: false,
			directionNav:true
		});
		}
		/*$('.htslider').flexslider({
		   	animation: "slide",
		   	pauseOnAction: false, 
			pauseOnHover: true,
			itemWidth: 269,
			itemMargin:0,
			controlNav: false,
			directionNav:true
		});
		$('#list-feel').flexslider({
		   	animation: "slide",
		   	pauseOnAction: false, 
			pauseOnHover: true,
			itemWidth: 269,
			itemMargin:0,
			controlNav: false,
			directionNav:true
		});
		*/
		if ($('#property-slider').length) {
		  $('#property-slider').flexslider({
		    animation: "slide",
		    controlNav: false,
		    animationLoop: false,
		    slideshow: false
		  });
		 }
		 if ($('.group3mobi .title').length) {
		  $('.group3mobi .title').flexslider({
		    animation: "slide",
		    controlNav: false,
		    
		    animationLoop: false,
		    slideshow: false,
		    itemWidth: $('.group3mobi .title .slides li').width(),
		    itemMargin: 5,
		    asNavFor: '.group3mobi .tip'
		  });
 }
 if ($('.group3mobi .tip').length) {
		  $('.group3mobi .tip').flexslider({
		    animation: "slide",
		    controlNav: false,
		    directionNav:false,
		    animationLoop: false,
		    slideshow: false,
		    sync: ".group3mobi .title"
		  });
		 }
			$("#htlatest > ul").niceScroll({touchbehavior:false,cursorcolor:"#555",cursoropacitymax:0.7,cursorwidth:6,background:"#ccc",autohidemode:false});	
 			$(".group3mobi>.tip").niceScroll({touchbehavior:false,cursorcolor:"#da5b78",cursoropacitymax:0.7,cursorwidth:5,background:"#ccc",autohidemode:true});
 			$(".nav_trigger").click(function() {
				$("body").toggleClass("show_sidebar");
			});
				var top_menu = 149; //vi flash trong logo load sau jquery
		$(window).scroll(function(){
			if( $(this).scrollTop() > top_menu) {
				$('#nav-wrapper').addClass('fixed');
			} else {
				$('#nav-wrapper').removeClass('fixed');
			}
		});
		if ($(window).width() < 840) {
    		$('#shownews_home-8').removeClass('level0').addClass('level1');
			$('#htlatest.level1 .widget-title a').html('--> Xem tất cả bản tin du học');
			$('.group_adv2').insertAfter('#shownews_home-2');
}
		/*
		var top_form = $('aside.frmegistry').offset();
		var bottom_form = $('footer.footer-box').offset();
		var form = $('aside.frmegistry').height();
		var kq=bottom_form.top-form;
		$(window).scroll(function(){
			if($(this).scrollTop() < kq) {
					if( $(this).scrollTop() > (top_form.top-60)){
						$('#sidebar:not(.home-right-below-content) .frmegistry').removeAttr( 'style' ).removeClass('ab');
						$('#sidebar:not(.home-right-below-content) .frmegistry').addClass('fixed');
					}
					else
							$('#sidebar:not(.home-right-below-content) .frmegistry').removeClass('fixed');
			}
			else {
				$('#sidebar:not(.home-right-below-content) .frmegistry').removeClass('fixed');
				$('#sidebar:not(.home-right-below-content) .frmegistry').addClass('ab').css({'top':kq-40});
				}
		});*/
 		});
	</script>
	

<?php wp_footer(); ?>
</body>
</html>