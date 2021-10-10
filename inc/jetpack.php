<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * * @package Unbox
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function lz_fitness_lite_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'render'    => 'lz_fitness_lite_infinite_scroll_render',
		'footer'    => 'site-footer',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'lz_fitness_lite_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function lz_fitness_lite_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    lz_fitness_lite_archive_post();
		else :
		    lz_fitness_lite_archive_post();
		endif;
	}
}
