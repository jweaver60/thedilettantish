<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package dilletantish
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function dilletantish_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'dilletantish_jetpack_setup' );
