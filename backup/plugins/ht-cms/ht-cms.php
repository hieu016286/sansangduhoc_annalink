<?php 

/*
Plugin Name: ht-cms
Plugin URI: http://huynhtin.com/
Description: Big user friendly buttons to make your clients happy and your wordpress a better CMS
Author: Huynh Tin
Version: 1.0
Author URI: http://www.huynhtin.com/
*/

// Create the function to output the contents of our Dashboard Widget

//manager Post
add_action( 'init', 'ht_cms_plugin_init' );
function ht_cms_plugin_init() {
	load_plugin_textdomain( 'ht',  false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
function admin_register_head() {
    $url = plugins_url() .'/'. basename(dirname(__FILE__)) . '/ht-cms.css';
    echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
}

add_action('admin_head', 'admin_register_head');
function wps_admin_bar() {
    global $wp_admin_bar;
	$wp_admin_bar->remove_node('updates');
    $wp_admin_bar->remove_node('wp-logo');
    $wp_admin_bar->remove_node('about');
    $wp_admin_bar->remove_node('wporg');
    $wp_admin_bar->remove_node('documentation');
    $wp_admin_bar->remove_node('support-forums');
    $wp_admin_bar->remove_node('feedback');
    $wp_admin_bar->remove_node('site-name');
	$wp_admin_bar->remove_node('comments');
	$wp_admin_bar->remove_node('new-content');
	$wp_admin_bar->remove_node('view');
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );

function toolbar_edit( $wp_admin_bar ) {
	$logo = array(
		'id' => 'logo',
		'title' => '<img style="margin: 5px; max-height: calc(100% - 10px);"src="'.plugins_url() .'/'. basename(dirname(__FILE__)) . '/images/logo.png" alt="'.__('Logo','ht').'" />',
		'href' => admin_url(),
		'meta' => array('class' => 'logo')
	);
	$homepage = array(
		'id' => 'home_page',
		'title' => __('View Home Page','ht'),
		'href' => get_option('siteurl'),
		'meta' => array('class' => 'admin-to-home-page','target' => '_blank')
  	);
	$adminpage = array(
		'id' => 'admin_page',
		'title' => __('Admin Dashboard','ht'),
		'href' => admin_url(),
		'meta' => array('class' => 'home-page-to-admin')
  	);
	$wp_admin_bar->add_node($logo);
	if(is_admin()){
  		$wp_admin_bar->add_node($homepage);
	} else $wp_admin_bar->add_node($adminpage);
}
add_action( 'admin_bar_menu', 'toolbar_edit', 999 );

function ht_remove_dashboard_widgets() {
    remove_action('welcome_panel', 'wp_welcome_panel');//welcome
    //remove_meta_box('welcome-panel-content', 'dashboard', 'side');  // Quick Press
	//remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
   	//remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
    //remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
    //remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
    //remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
    remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
}
add_action('wp_dashboard_setup', 'ht_remove_dashboard_widgets' );

function ht_custom_login_logo() {
    $url = plugins_url() .'/'. basename(dirname(__FILE__)) . '/';

	echo '<style type="text/css">';
		echo '.login h1 a { background-image: url('.$url.'images/login.png); margin-bottom:5px; background-size: auto; width: 281px; height: 50px; }';
		echo 'body { background: #f3f3f3 url('.$url.'images/bg_login_top.jpg) center top no-repeat; border-top-style:none; }';
		echo '#backtoblog { display:none; }';
	echo '</style>';

echo '<script type="text/javascript">';
echo 'function ht_login() {';
    echo 'var ht_changeLink = document.getElementById("login").innerHTML;';
    echo 'ht_changeLink = ht_changeLink.replace("wordpress.org/", "huynhtin.com/");';
    echo 'ht_changeLink = ht_changeLink.replace("Powered by WordPress", "'.__('Powered by WordPress, Developed by Huynh Tin','ht').'");';
    echo 'document.getElementById("login").innerHTML = ht_changeLink;';
echo '}';
echo 'window.onload=ht_login;';
echo '</script>';

}
add_action('login_head', 'ht_custom_login_logo');

function ht_remove_footer_admin () {
    _e('Powered by <a href="http://www.wordpress.org" target="_blank">WP</a>. Developed by <a href="http://www.huynhtin.com" target="_blank">Huynh Tin</a>','ht');
    }
add_filter('admin_footer_text', 'ht_remove_footer_admin');

function ht_change_footer_version() {return ' ';}
add_filter( 'update_footer', 'ht_change_footer_version', 9999);

function ht_remove_admin_stuff( $translated_text, $untranslated_text, $domain ) {

    $custom_field_text = 'You are using <span class="b">WordPress %s</span>.';

    if ( is_admin() && $untranslated_text === $custom_field_text ) {
        return '';
    }

    return $translated_text;
}
add_filter('gettext', 'ht_remove_admin_stuff', 20, 3);

//remove plugin update
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
//remove wp update
add_action('after_setup_theme','remove_core_updates');
function remove_core_updates()
{
	 if(! current_user_can('update_core')){return;}
	 add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
	 add_filter('pre_option_update_core','__return_null');
	 add_filter('pre_site_transient_update_core','__return_null');
	 global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}

remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

function ht_remove_submenus() {
	global $submenu;
	unset($submenu['index.php'][10]); // Removes 'Updates'.
}
add_action('admin_menu', 'ht_remove_submenus');

function ht_disable_admin_bar() {
	add_filter( 'show_admin_bar', '__return_false' );
}
//add_action( 'init', 'ht_disable_admin_bar' , 9 );
?>