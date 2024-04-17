<?php

/**
 * @author Deanna Schneider & Jason Lemahieu
 * @copyright 2008
 * @description Use WordPress Shortcode API for more features
 * @Docs http://codex.wordpress.org/Shortcode_API
 */

class cets_EmbedGmaps_shortcodes {
		
	// register the new shortcodes
	function cets_EmbedGmaps_shortcodes() {
	
		add_shortcode( 'cetsEmbedGmap', array(&$this, 'show_Gmap') );
			
	}

	function show_Gmap( $atts ) {
	
		global $cets_EmbedGmaps;
	
		extract(shortcode_atts(array(
			'src' 		=> '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d823.777237309613!2d106.66650454499545!3d10.844410431204217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752909f8013d67%3A0x176c5584ef5b51bf!2zVGhp4bq_dCBL4bq_IFdlYnNpdGUgRUMgVmnhu4d0IE5hbQ!5e0!3m2!1sen!2s!4v1438315930298" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
			'height' => 425,
			'width' => '100%',
			'frameborder' => 0,
			'marginheight' => 0,
			'marginwidth' => 0,
			'scrolling' =>'no'
		), $atts ));
		
		// clean up the url
		$src = str_replace("'", "\\'", esc_url($src));
			
		//if it's not a link to maps.google.com, don't allow it
		//if (substr_count($src, 'http://maps.google', 0) == 0 && substr_count($src, 'https://maps.google', 0) == 0) return;
		
		// makes sure all the other attributes are valid
		if (!is_numeric($height)) $height = 425;
		if (!$width) $width = '100%';
		if (!is_numeric($frameborder)) $frameborder = 0;
		if (!is_numeric($marginheight)) $marginheight = 0;
		if (!is_numeric($marginwidth)) $marginwidth = 0;
		if ($scrolling != 'auto' && $scrolling != 'yes') $scrolling = 'no';
		
		// take the link and make the iframe embed stuff.
		$return = '<iframe width="' . $width . '" height="' . $height . '" frameborder="' . $frameborder . '" scrolling="' . $scrolling . '" marginheight="' . $marginheight . '" marginwidth="' . $marginwidth . '" src="' . $src . '&amp;output=embed"></iframe><br /><small><a href="' . $src . '&amp;source=embed" target="_new" style="color:#0000FF;text-align:left">View larger map</a> </small>';
		
		return $return;
		
	}	
}

// let's use it
$cets_EmbedGmapsShortcodes = new cets_EmbedGmaps_Shortcodes;	