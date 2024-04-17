<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Sugar & Spice
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function fom_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container'     => 'primary',
		'footer'        => 'footer',
	) );
}
//add_action( 'after_setup_theme', 'fom_jetpack_setup' );