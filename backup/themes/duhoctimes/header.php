<head>
<?php 
/**
 * Match wp_head() indent level
 */
?>

<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); // stay compatible with SEO plugins ?></title>

<?php if (!Bunyad::options()->no_responsive): // don't add if responsiveness disabled ?> 
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php endif; ?>
<meta name="google-site-verification" content="rq04G6mbzhz35QwJuFYIBh3ptxYSIzNxZYFAGLyou4Y"/> 
<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<?php if (Bunyad::options()->favicon): ?>
<link rel="shortcut icon" href="<?php echo esc_attr(Bunyad::options()->favicon); ?>" />	
<?php endif; ?>

<?php if (Bunyad::options()->apple_icon): ?>
<link rel="apple-touch-icon-precomposed" href="<?php echo esc_attr(Bunyad::options()->apple_icon); ?>" />
<?php endif; ?>
	
<?php wp_head(); ?>
	
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-122316855-1', 'auto');
  ga('send', 'pageview');

</script>

</head>


<body <?php body_class(); ?>>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="160635723987204"
  theme_color="#d70060"
  logged_in_greeting="Hi! How can we help you?"
  logged_out_greeting="Hi! How can we help you?">
</div>
<div class="main-wrap">

	<?php 

	/**
	 * Get the selected header template
	 * 
	 * Note: Default is partials/header/layout.php
	 */
	get_template_part('partials/header/layout', Bunyad::options()->header_style);
	
	?>
	
<?php if (!Bunyad::options()->disable_breadcrumbs): ?>
	<div <?php Bunyad::markup()->attribs('breadcrumbs-wrap', array('class' => array('breadcrumbs-wrap'))); ?>>
		
		<div class="wrap">
		<?php Bunyad::core()->breadcrumbs(); ?>
		</div>
		
	</div>
<?php endif; ?>

<?php do_action_in(); do_action('bunyad_pre_main_content'); ?>