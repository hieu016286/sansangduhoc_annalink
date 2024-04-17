<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 600; /* pixels */

/** 
 * Adjust $content_width it depending on the temaplte used 
 */
theme_load_lang();
function theme_load_lang(){
	global $q_config;
	$lang = isset($q_config['language'])? $q_config['language'].'_'.strtoupper($q_config['language']).'.mo':get_option("fom_lang");
	if (isset($lang) && $lang) {
		if($lang == 'Vietnamese (default)') $lang = 'vi_VN.mo';
		load_textdomain('fom', get_template_directory() . '/languages/' . $lang);
	}
}

function fom_content_width() {
	global $content_width;
    
	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'full-width-page.php' ) )
		$content_width = 940;
}
add_action( 'template_redirect', 'fom_content_width' );    
    
    
if ( ! function_exists( 'ht_setup' ) ) :
function ht_setup() {

	load_theme_textdomain( 'ht', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 210, 210, true );
    add_image_size( 'mini-thumb', 60, 60, true );
    
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ht' ),
		'top_menu' => __( 'Menu Top', 'ht' ),
		'footer' => __( 'Footer Menu', 'ht' ),
		'sidebar_main'=>__('Sidebar Main','ht'),
	) );
    add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support('post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio'));
}
endif; // ht_setup
add_action( 'after_setup_theme', 'ht_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ht_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Home Top', 'fom' ),
		'id'            => 'sidebar-home-left-below',
        'description'   => 'Show at Left Below Home',
		'before_widget' => '<section id="%1$s" class="widget-home widget %2$s $added_class">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span class="name">',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Center Left', 'fom' ),
		'id'            => 'center_left',
        'description'   => __('Widget area the center left at home.','ht'),
		'before_widget' => '<section id="%1$s" class="widget-home widget %2$s $added_class">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span class="name">',
		'after_title'   => '</span></h3>',
	) ); 
	register_sidebar( array(
		'name'          => __( 'Home Center Right', 'fom' ),
		'id'            => 'center_right',
        'description'   => __('Widget area the center right at home.','ht'),
		'before_widget' => '<section id="%1$s" class="widget-home widget %2$s $added_class">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span class="name">',
		'after_title'   => '</span></h3>',
	) );  
	register_sidebar( array(
		'name'          => __( 'Home Bottom Left', 'fom' ),
		'id'            => 'bottom_left',
        'description'   => __('Widget area the bottom left at home.','ht'),
		'before_widget' => '<section id="%1$s" class="widget-home widget %2$s $added_class">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span class="name">',
		'after_title'   => '</span></h3>',
	) ); 
	register_sidebar( array(
		'name'          => __( 'Home Bottom Right', 'fom' ),
		'id'            => 'bottom_right',
        'description'   => __('Widget area the bottom right at home.','ht'),
		'before_widget' => '<section id="%1$s" class="widget-home widget %2$s $added_class">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span class="name">',
		'after_title'   => '</span></h3>',
	) );  
	register_sidebar( array(
		'name'          => __( 'Sidebar Home', 'fom' ),
		'id'            => 'sidebar-home',
        'description'   => 'Sidebar Home widget (Right Below Home)',
		'before_widget' => '<section id="%1$s" class="widget-home widget %2$s $added_class">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span class="name">',
		'after_title'   => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar Pages General', 'fom' ),
		'id'            => 'sidebar-left',
        'description'   => __('Main widget area','ht'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s $added_class">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar Pages Other', 'fom' ),
		'id'            => 'sidebar-left-other',
        'description'   => __('Main widget area other','ht'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s $added_class">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
	
}
add_action( 'widgets_init', 'ht_widgets_init' );

require_once(get_template_directory().'/inc/add_meta_boxes.php');
include( get_template_directory() . '/inc/ht-functions.php' );
include( get_template_directory() . '/inc/cat_product.php' );
include( get_template_directory() . '/inc/add_metafield_for_taxonomy.php' );
include( get_template_directory() . '/inc/widgets/news-widget.php' );
$meta_taxonomy = array();
	$meta_taxonomy[] = array(
		'taxonomy' => 'abroad_category', 
		'fields' => array(
						array('id' => 'order','name' => __('Order','ht'), 'type' => 'text')
					)
	);
	foreach($meta_taxonomy as $m){
		$cf = new HT_CustomTaxFields($m['taxonomy'], $m['fields']);
	}

function ht_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ht_scripts' );


function ht_css() {
    
	//wp_enqueue_style( 'fom-fonts', fom_fonts_url() );

	wp_enqueue_style( 'fom-style', get_stylesheet_uri() );
	
	if ( of_get_option( 'responsive' ) == 0 ){
		wp_enqueue_style( 'fom-responsive', get_template_directory_uri() . '/css/responsive.css' );
		wp_enqueue_style( 'fom-menu', get_template_directory_uri() . '/css/menu.css' );
	}

    wp_register_style('fom-awesome', get_template_directory_uri() . '/fonts/font-awesome.css');
    wp_enqueue_style('fom-awesome');
	
	wp_register_style('fom-robotoondensedfont', get_template_directory_uri() . '/fonts/RobotoCondensed.css');
    wp_enqueue_style('fom-robotoondensedfont');
    
}
add_action( 'wp_enqueue_scripts', 'ht_css' );
   
function ht_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'ht_excerpt_length', 999 );

function ht_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'ht_excerpt_more');


/**
 * Options Framework
 */
if ( ! function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options-framework/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework/options-framework.php';
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function get_name_date($tempDate = ''){
	$newDate = preg_replace("/(\d+)\/(\d+)\/(\d+)/","$3-$2-$1",$tempDate);
	$array_date = array('1'=>'Thứ hai','2'=>'Thứ ba','3'=>'Thứ tư','4'=>'Thứ năm','5'=>'Thứ sáu','6'=>'Thứ bảy','7'=>'Chủ nhật');
	return $array_date[date('N', strtotime( $newDate))];
}
function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'team_to_direct_home',
		'title' => 'Đội Chủ Nhà',
        'from' => 'team',
        'to' => 'direct',
		'duplicate_connections' => false,
		'cardinality' => 'one-to-many'
    ) );
	p2p_register_connection_type( array(
        'name' => 'team_to_direct_away',
		'title' => 'Đội Khách',
        'from' => 'team',
        'to' => 'direct',
		'duplicate_connections' => false,
		'cardinality' => 'one-to-many'
    ) );
}
add_action( 'p2p_init', 'my_connection_types' );

function get_post_thumbnail_url($postid=0, $size='post-thumbnail') {
	$postid = ( null === $postid ) ? get_the_ID() : $postid;
    $post_thumbnail_id = get_post_thumbnail_id( $postid );
	$size = apply_filters( 'post_thumbnail_size', $size );
	if ( $post_thumbnail_id ) {
		$thumb = wp_get_attachment_image_src( $post_thumbnail_id, $size);
		if ($thumb != null or $thumb != '') {
			return $thumb[0];
		}
	}
	elseif ($images = get_children(array(
		'post_parent' => $postid,
		'post_type' => 'attachment',
		'numberposts' => '1',
		'post_mime_type' => 'image', )))
		foreach($images as $image) {
			$thumbnail=wp_get_attachment_image_src($image->ID, $size);
			return $thumbnail[0];
		}
	else {
		preg_match_all('/https?:\/\/(\S)+(jpe?g|png|[tg]iff?|svg)/',apply_filters('the_content',get_post_field('post_content',$post_id)),$newimg);
		if(isset($newimg[0][1])) return $newimg[0][1];
	}
	return get_bloginfo ('stylesheet_directory').'/images/no-image.jpg';
}