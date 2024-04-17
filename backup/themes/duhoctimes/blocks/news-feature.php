<?php

/**
 * Tag or category taxonomy?
 */
$is_tag = $is_cat = false;
$the_block = (empty($the_block) ? 'news-focus' : $the_block);

$query_args = array(
	'posts_per_page' => (!empty($posts) ? intval($posts) : 5), 
	'order' => ($sort_order == 'asc' ? 'asc' : 'desc'),
	'offset' => ($offset ? $offset : '')
);

if (!empty($taxonomy))
{
	$_taxonomy = $taxonomy; // preserve
	
	// get the tag
	$taxonomy = get_term_by('id', $cat, $_taxonomy);
	
	$link = get_term_link($taxonomy, $_taxonomy);
	$query_args['tax_query'] = array(array(
		'taxonomy' => $_taxonomy,
		'field' => 'id',
		'terms' => (array) $cat
	));
}
else if (!empty($cat)) {
	 
	// get latest from the specified category
	$is_cat = true;
	$taxonomy = is_numeric($cat) ? get_category(intval($cat)) : get_category_by_slug($cat);
	
	$link = get_category_link($taxonomy);
	$query_args['category_name'] =  $taxonomy->slug;
}
else if (!empty($tax_tag)) {
	
	$is_tag = true;
	$taxonomy = get_term_by('slug', $tax_tag, 'post_tag');
	
	$link = get_term_link($taxonomy, 'post_tag');
	$query_args['tag'] =  $taxonomy->slug;
}

/**
 * Setup Main Query
 */

if ($sort_by == 'modified') {
	$query_args['orderby'] = 'modified';
}
else if ($sort_by == 'random') {
	$query_args['orderby'] = 'rand';
}

$query_args = apply_filters('bunyad_block_query_args', $query_args, 'news_focus', $atts);

// main query
$query = new WP_Query($query_args);	

// check if it exists
if (!is_object($taxonomy)) {
	$sub_cats = array();
	$link = '#';
}
else if (empty($title)) {
	$title = $taxonomy->name;
}

$highlights = (empty($highlights) ? 1 : intval($highlights));

/**
 * Setup sub-categories to display
 */

$sub_cats = !empty($sub_cats) ? $sub_cats : array();

// selected sub-cats?
if (!empty($sub_cats)) {
	$sub_cats = get_categories(array('include' => $sub_cats, 'hierarchical' => false, 'taxonomy' => (!empty($_taxonomy) ? $_taxonomy : 'category')));
}
// entered sub tags instead?
else if (!empty($sub_tags)) {
	$sub_cats = array();
	
	foreach ((array) explode(',', $sub_tags) as $_tag) {
		array_push($sub_cats, get_term_by('slug', $_tag, 'post_tag'));
	}
}
else if (!empty($taxonomy) && property_exists($taxonomy, 'cat_ID')) {
	  
	// empty, default to child sub categories
	$sub_cats = get_categories(array('child_of' => $taxonomy->cat_ID, 'number' => 3, 'hierarchical' => false));
}

?>

<section class="highlights news-feature">

	<span class="cat-title larger cat-<?php echo $taxonomy->term_id; ?>">
	<a href="<?php echo esc_url($link); ?>"><b><?php echo esc_html($title); ?></b></a></span>

	
	<?php 
	
	foreach (array_merge(array($taxonomy), $sub_cats) as $key => $sub_cat): 

		$count = $id = 0;
	
		
		if ($key !== 0) {
			
			// post tag?
			if ($sub_cat->taxonomy == 'post_tag') {
				$query = new WP_Query(array_merge($query_args, array('tag' => $sub_cat->slug)));
			}
			else if ($sub_cat->taxonomy != 'category') {
				
				// custom taxonomy
				$query_args['tax_query'][0]['terms'] = (array) $sub_cat->term_id;
				$query = new WP_Query($query_args);
			}
			else {
				// normal category
				$query = new WP_Query(array_merge($query_args, array('category_name' => $sub_cat->slug)));
			}
			
			$id = $sub_cat->term_id;
		}
		
	?>
	
	<div class="row news-<?php echo $id; ?> highlights">

		<?php 
			$query_featured = new WP_Query( array( 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes' ) );
		?>
		<div class="column three-fourth blocks" id="slider">
		<ul>
		<?php
			$width = 530;
			$height = 355;
            $style="width:auto !important;height:355px !important";
			if(get_the_ID() == 119043){
				$width = 768;
				$height = 512;
				$style="width:auto !important;height:512px !important";
			}
			if(wp_is_mobile()){
				$width = 365;
			    $height = 206;
                $style="width:365px !important;height:206px !important";
                //$style = "";
			}
		?>
		<?php
			// main posts - better highlighted 
			while ($query_featured->have_posts()): $query_featured->the_post(); 			
			?>
			<li>
			<article itemscope itemtype="http://schema.org/Article">
					
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="image-link" itemprop="url">
					<?php the_post_thumbnail(
								array($width, $height), 
								array('class' => 'image img-responsive','style'=> $style, 'title' => strip_tags(get_the_title()), 'itemprop' => 'image')); ?>
					
					<?php if (get_post_format()): ?>
						<span class="post-format-icon <?php echo esc_attr(get_post_format()); ?>"><?php
							echo apply_filters('bunyad_post_formats_icon', ''); ?></span>
					<?php endif; ?>
					
					<?php echo apply_filters('bunyad_review_main_snippet', '', 'stars'); ?>
				</a>
				<h2 itemprop="name headline"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
			</article>
			</li>
		<?php endwhile; ?>
		</ul>
		
		</div>
		
		
		<ul class="column one-fourth block">
		<?php $i=0; ?>
		<?php while ($query->have_posts()): $query->the_post(); ?>
		
			<?php if ($the_block == 'news-focus'): // other posts, in a list ?>
			
				<li class="<?php echo ($i%2 == 0) ? 'star-red':'star-yellow';?>">
					<?php if (class_exists('Bunyad') && Bunyad::options()->review_show_widgets): ?>
						<?php echo apply_filters('bunyad_review_main_snippet', ''); ?>
					<?php endif; ?>
					
					</a>
					
					<div class="content news-feature">
						
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>">
							<?php if (get_the_title()) the_title(); else the_ID(); ?></a>
							
						<?php echo Bunyad::blocks()->meta('below', 'block-small'); ?>
							
						<?php echo apply_filters('bunyad_review_main_snippet', '', 'stars'); ?>
							
					</div>
					
				</li>
			
			<?php elseif ($the_block == 'focus-grid'): ?>
			
				<li class="post">
				
					<a href="<?php the_permalink() ?>" class="small-image"><?php 
						the_post_thumbnail(
							apply_filters('bunyad_block_image', 'focus-grid-small'), 
							array('title' => strip_tags(get_the_title())
						)); 
						?>
						
						<?php if (class_exists('Bunyad') && Bunyad::options()->review_show_widgets): ?>
							<?php echo apply_filters('bunyad_review_main_snippet', ''); ?>
						<?php endif; ?>
					</a>
					
					<div class="content">

						<?php echo Bunyad::blocks()->meta('above', 'block-small'); ?>
					
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
						<?php echo Bunyad::blocks()->meta('below', 'block-small'); ?>
							
					</div>
					
				</li>
			
			<?php endif; ?>
			<?php $i++;?>
		
		<?php endwhile; ?>
		
		</ul>
			
		<?php wp_reset_query(); ?>
		
	</div>
	
	<?php endforeach; ?>
		
</section>