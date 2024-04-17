<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$color_scheme = array(
		'green'     => __('Green', 'ht'),
		'emerald'   => __('Emerald', 'ht'),
		'mint'      => __('Mint', 'ht'),
		'peach'     => __('Peach', 'ht'),
		'pink'      => __('Pink', 'ht'),
		'red'       => __('Red', 'ht'),
		'violet'    => __('Violet', 'ht'),
		'babyblue'  => __('Baby Blue', 'ht'),
		'orange'    => __('Orange', 'ht'),
		'yellow'    => __('Yellow', 'ht'),
	);

	$list_categories = get_categories('hide_empty=0');
	$list_cat[0] = __('No Categories','ht');
	foreach ( $list_categories as $cat ) {
		$list_cat[$cat->cat_ID] = $cat->cat_name;
	}
	
	$radio = array("0" => __('No', 'ht'),"1" => __('Yes', 'ht'));

	// Layout Array
	$layout_options = array(
		'primary-sidebar'   => __('Two Column (Primary at Left)', 'ht'),
		'sidebar-primary'      => __('Two Column (Primary at Right)', 'ht'),
		'sidebar-primary-sidebar' => __('Three Column', 'ht'),
	);
	// Multicheck Array
	$meta_data = array(
		'date'      => __('Display date', 'options_framework_theme'),
		'author'    => __('Display author', 'options_framework_theme'),
		'comments'  => __('Display comments', 'options_framework_theme'),
	);

	// Multicheck Defaults
	$meta_defaults = array(
		'date'      => '1',
		'author'    => '1',
		'comments'  => '1',
	);
    
	$prefix = 'ht_option_';
	$options = array();

	$options[] = array(
		'name' => __('General Settings', 'ht'),
		'type' => 'heading');
	
	$options[] = array(
		'name'      => __('Color scheme', 'ht'),
		'desc'      => __('General color scheme.', 'ht'),
		'id'        => $prefix.'main_color',
		'std'       => '#111',
		'type'      => 'color',
		'class'     => 'mini'
    );
            
    $options[] = array( 
        'name'  => __('Custom logo image', 'ht'),
        'desc'  => __('You can upload custom image for your website logo (optional).', 'ht'),
        'id'    => $prefix.'logo_image',
        'type'  => 'upload'
    );    

    $options[] = array( 
        'name'  => __('Custom favicon', 'ht'),
        'desc'  => __('Small 16x16px pictures you see beside URL in browser\'s address bar. Image should be named <b>favicon.ico</b>', 'ht'),
        'id'    => $prefix.'favicon',
        'type'  => 'upload'
    );  

	$options[] = array(
		'name'    => __('Select Layout', 'ht'),
		'desc'    => '',
		'id'      => $prefix.'layout',
        'std'     => 'primary-sidebar',
		'type'    => 'select',
		'options' => $layout_options
    );  

	$options[] = array( 
		'name'		=> __('Disable responsive stylesheet', 'ht'),
		'id'		=> $prefix.'responsive',
        'desc'		=> __('Setting to "Yes" will make your website unresponsive i.e. look the same on computers and mobile devices.','ht'),
		'std' 		=> 0,
		'type' 		=> 'radio',
		'options'	=> $radio
	);

    $options[] = array(
		'name'      => __('Post meta display options', 'ht'),
		'id'        => $prefix.'meta_data',
		'std'       => $meta_defaults,
		'type'      => 'multicheck',
		'options'   => $meta_data,
    );
	
    $options[] = array(
		'name' => __('Menu Settings', 'ht'),
		'type' => 'heading');

	$options[] = array(
		'name'      => __('Background', 'ht'),
		'desc'      => __('Background color of menu', 'ht'),
		'id'        => $prefix.'nav_bg_color',
		'std'       => array('color' => '#2D2D2D'),
		'type'      => 'background',
		'class'     => 'mini'
    );
	$options[] = array(
		'name'      => __('Background Hover', 'ht'),
		'desc'      => __('Background color hover of menu', 'ht'),
		'id'        => $prefix.'nav_bg_hover',
		'std'       => array('color' => '#393939'),
		'type'      => 'background',
		'class'     => 'mini'
    );
	$options[] = array(
		'name'      => __('Text Color', 'ht'),
		'desc'      => __('Text color of menu', 'ht'),
		'id'        => $prefix.'nav_text_color',
		'std'       => '#fff',
		'type'      => 'color',
		'class'     => 'mini'
    );
	$options[] = array(
		'name'      => __('Hover Color', 'ht'),
		'desc'      => __('Hover color for text of menu', 'ht'),
		'id'        => $prefix.'nav_text_color_hover',
		'std'       => '#fff',
		'type'      => 'color',
		'class'     => 'mini'
    );
	$options[] = array(
		'name'      => __('Border Left Color', 'ht'),
		'desc'      => __('Border left color of li menu', 'ht'),
		'id'        => $prefix.'nav_border_left_color',
		'std'       => '#383838',
		'type'      => 'color',
		'class'     => 'mini'
    );
	$options[] = array(
		'name'      => __('Border Right Color', 'ht'),
		'desc'      => __('Border Right color of li menu', 'ht'),
		'id'        => $prefix.'nav_border_right_color',
		'std'       => '#222222',
		'type'      => 'color',
		'class'     => 'mini'
    );
	$options[] = array(
		'name' => __('HomePage', 'ht'),
		'type' => 'heading');
	$options[] = array(
		'name'      => __('Socials', 'ht'),
		'desc'		=> __('Facebook'),
		'id'        => $prefix.'social_facebook',
		'type'      => 'text'
    );
	$options[] = array(
		'desc'		=> __('Google plus'),
		'id'        => $prefix.'social_google_plus',
		'type'      => 'text'
    );
	$options[] = array(
		'desc'		=> __('Youtube'),
		'id'        => $prefix.'social_youtube',
		'type'      => 'text'
    );
	$options[] = array(
		'desc'		=> __('Twitter'),
		'id'        => $prefix.'social_twiter',
		'type'      => 'text'
    );
	$options[] = array(
		'desc'		=> __('Address'),
		'id'        => $prefix.'address',
		'type'      => 'text'
    );
	$options[] = array(
		'desc'		=> __('Hotline'),
		'id'        => $prefix.'hotline',
		'type'      => 'text'
    );
	$options[] = array(
		'desc'		=> __('Email'),
		'id'        => $prefix.'email',
		'type'      => 'text'
    );
	$options[] = array(
		'name'      => __('Advertising Header', 'ht'),
		'id'        => $prefix.'adv_header',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Advertising Content 1', 'ht'),
		'id'        => $prefix.'adv_content1',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Advertising Content 2', 'ht'),
		'id'        => $prefix.'adv_content2',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Advertising Content 3', 'ht'),
		'id'        => $prefix.'adv_content3',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Advertising Banner', 'ht'),
		'id'        => $prefix.'adv_banner',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Advertising Right Slide', 'ht'),
		'id'        => $prefix.'adv_right_slide',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Content of test', 'ht'),
		'id'        => $prefix.'adv_test',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Link of test', 'ht'),
		'id'        => $prefix.'adv_testlink',
		'type'      => 'text'
    );
	$options[] = array(
		'name' => __('Footer', 'ht'),
		'type' => 'heading');
	$options[] = array(
		'name'      => __('About Us', 'ht'),
		'id'        => 'ht_option_about_us',
		'type'      => 'editor'
    );
	$options[] = array(
		'name'      => __('Info Company', 'ht'),
		'id'        => 'ht_option_copyright',
		'type'      => 'editor'
    );
	return $options;
}