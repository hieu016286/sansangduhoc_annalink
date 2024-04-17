<?php
/**
* @package Add Attachment Fields
* @author Frank Bültge
*/
/*
Plugin Name: Add Attachment Fields
Plugin URI: http://bueltge.de/
Text Domain: add_attachment_fields
Domain Path: /languages
Description: Example for add a custom field to an attachment in WordPress
Author: Frank Bültge
Version: 0.0.1
Author URI: http://bueltge.de/
Donate URI: http://bueltge.de/wunschliste/
License: GPL
Last change: 24.11.2010 10:21:19
*/
//avoid direct calls to this file, because now WP core and framework has been used
if ( !function_exists('add_action') ) {
header('Status: 403 Forbidden');
header('HTTP/1.1 403 Forbidden');
exit();
} elseif ( version_compare(phpversion(), '5.0.0', '<') ) {
	$exit_msg = 'The plugin require PHP 5 or higher';
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit($exit_msg);
}
if ( !class_exists('add_attachment_fields') ) {
	//WordPress definitions
	if ( !defined('WP_CONTENT_URL') )
	define('WP_CONTENT_URL', get_option('siteurl') . '/views');
	if ( !defined('WP_CONTENT_DIR') )
	define('WP_CONTENT_DIR', ABSPATH . 'views');
	if ( !defined('WP_PLUGIN_URL') )
	define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
	if ( !defined('WP_PLUGIN_DIR') )
	define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');
	if ( !defined('PLUGINDIR') )
	define( 'PLUGINDIR', 'wp-content/plugins' ); // Relative to ABSPATH. For back compat.
	if ( !defined('WP_LANG_DIR') )
	define('WP_LANG_DIR', WP_CONTENT_DIR . '/languages');
	// plugin definitions
	define( 'FB_AAF_BASENAME', plugin_basename(__FILE__) );
	define( 'FB_AAF_BASEDIR', dirname( plugin_basename(__FILE__) ) );
	define( 'FB_AAF_TEXTDOMAIN', 'add_attachment_fields' );
	
	class add_attachment_fields {
		function __construct() {
			if ( !is_admin() )
				return FALSE;
			add_action( 'init', array(&$this, 'text_domain') );
			add_filter( 'attachment_fields_to_edit', array(&$this, 'fb_attachment_fields_edit'), 10, 2);
			add_filter( 'attachment_fields_to_save', array(&$this, 'fb_attachment_fields_save'), 10, 2);
		}
		function text_domain() {
			load_plugin_textdomain( FB_AAF_TEXTDOMAIN, false, FB_AAF_BASEDIR . '/languages' );
		}
		// Add a custom field to an attachment in WordPress
		function fb_attachment_fields_edit($form_fields, $post) {
			$form_fields = array(
				'link_img' => array(
					'label' => __( 'Link URL', 'ht' ),
					'value' => get_post_meta($post->ID, '_link_img', true),
					'helps' => __( 'Đưỡng dẫn liên kết', 'ht' )
				),
				'order_img' => array(
					'label' => __( 'Sắp xếp', 'ht' ),
					'value' => get_post_meta($post->ID, '_order', true),
					'helps' => __( 'Thứ tự sắp xếp', 'ht' )
				)
			);
			return $form_fields;
		}
		// save custom field to post_meta
		function fb_attachment_fields_save($post, $attachment) {
			foreach((array)$attachment as $k => $v){
				update_post_meta($post['ID'], '_'.$k, $v);
			}
			return $post;
		}
	}
	function add_attachment_fields_start() {
		new add_attachment_fields();
	}
	add_action( 'plugins_loaded', 'add_attachment_fields_start' );
}
?>