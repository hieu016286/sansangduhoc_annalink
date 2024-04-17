
	<div class="main" style="height: 190px;">
	<div class="logo-list">
	<?php //logo_slider(); ?>
	</div>
	<div class="clear" id="center-wrap2">
<link href="<?php echo site_url(); ?>/lib/css/horizotal.css" rel="stylesheet" type="text/css" />        
<script src="<?php echo site_url(); ?>/lib/js/mootools.js" type="text/javascript"></script>
<script src="<?php echo site_url(); ?>/lib/js/horizotal.js" type="text/javascript"></script>
<script src="<?php echo site_url(); ?>/lib/js/jaanimation.js" type="text/javascript"></script>
<script src="<?php echo site_url(); ?>/lib/js/easySlider1.7.js" type="text/javascript"></script>
<div id="flash" style="overflow: hidden;height: auto;">
    <div title="" class="ja-anim" id="ja-animMod64" style="">
        <div class="anim-img">
            <img width="800" src="<?php echo site_url(); ?>/lib/images/airport.png"></div>
    </div>
    <script charset="utf-8" language="javascript" type="text/javascript">
        jQuery(document).ready(function () {
			function animatethis(targetElement, speed) {
				jQuery(targetElement).animate({ marginLeft: "+=1580px"},
				{
					duration: speed,
					complete: function ()
					{
						targetElement.css('margin-left','-600px');
						animatethis(targetElement, 13000);
					}
				});
			};

			animatethis(jQuery('#ja-animMod64'), 13000);
		});	
    </script>
    
        <div id="dvpartnerLeft">
            <div id="partnerLeft" style="width: 160px; height: 70px; overflow: hidden;">
            <ul style="">
			<li style="margin-left: -160px; float: left;">
                <a class="thumb" href="http://www.vodafone.com.au" rel="nofollow" title="Vodafone">
				<img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/79/Vodafone.jpg"></a>
            </li>
        
            <li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/26/studygroup.jpg">
            </li>
        
            <li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/27/NAVI_1A.jpg">
            </li>
        
            <li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/71/Global.jpg">
            </li>
        
            <li style="float: left;">
                <a class="thumb" href="http://www.vodafone.com.au" rel="nofollow" title="Vodafone">
				<img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/79/Vodafone.jpg"></a>
            </li>
        
            <li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/26/studygroup.jpg">
            </li>
			<li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/100/isa.jpg">
            </li>
            <li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/logo/flywire.png">
            </li>
            <li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/logo/nsec.jpg">
            </li>
            <li style="float: left;">
                <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/logo/nib-iman.jpg">
            </li>
			</ul> 
			</div>
			</div>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    jQuery("#partnerLeft").easySlider({
                        auto: true,
                        continuous: true,
                        controlsShow: false
                    });
                    jQuery("#vip_banner").easySlider({
                        auto: true,
                        continuous: true,
                        pause: 3000,
                        controlsShow: false
                    });
                });	
	</script>
        
    
            <div id="dvpartnerRight">
                <div id="partnerRight" style="width: 160px; height: 70px; overflow: hidden;">
                    <ul style="width: 1280px; margin-left: -709.35px;"><li style="margin-left: -160px; float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/81/Medibank.jpg">
            </li>
        
            <li style="float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/73/Allianz.jpg">
            </li>
        
            <li style="float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/74/ahm_oshc_logo.jpg">
            </li>
        
            <li style="float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/80/Bupa.jpg">
            </li>
             <li style="float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/logo/imagine-education.png">
            </li>
             <li style="float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/logo/inus.png">
            </li>
             <li style="float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/logo/kingeducation.png">
            </li>
        
            <li style="float: left;">
                 <img width="160px" height="70px" src="<?php echo site_url(); ?>/data/aditems/81/Medibank.jpg">
            </li>
            </ul> </div></div>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    jQuery("#partnerRight").easySlider({
                        auto: true,
                        continuous: true,
                        controlsShow:false
                    });
                });	
	</script>
        
</div>

    </div>
	</div>
	<?php do_action('bunyad_post_main_content'); ?>
	
	<footer class="main-footer">
	
	<?php if (!Bunyad::options()->disable_footer): ?>
		<div class="wrap">
		
		<?php if (is_active_sidebar('main-footer')): ?>
			<ul class="widgets row cf">
				<?php dynamic_sidebar('main-footer'); ?>
			</ul>
		<?php endif; ?>
		
		</div>
	
	<?php endif; ?>
	
	
	<?php if (!Bunyad::options()->disable_lower_footer): ?>
		<div class="lower-foot">
			<div class="wrap">
		
			<?php if (is_active_sidebar('lower-footer')): ?>
			
			<div class="widgets">
				<?php dynamic_sidebar('lower-footer'); ?>
			</div>
			
			<?php endif; ?>
		
			</div>
		</div>		
	<?php endif; ?>
	
	</footer>
	
</div> <!-- .main-wrap -->

<?php wp_footer(); ?>

</body>
</html>