<?php
/**
 * Cafe Coffee Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cafe-coffee-blocks
 * @since cafe-coffee-blocks 1.0
 */

if ( ! function_exists( 'cafe_coffee_blocks_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since cafe-coffee-blocks 1.0
	 *
	 * @return void
	 */
	function cafe_coffee_blocks_support() {

		load_theme_textdomain( 'cafe-coffee-blocks', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'cafe_coffee_blocks_support' );

if ( ! function_exists( 'cafe_coffee_blocks_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since cafe-coffee-blocks 1.0
	 *
	 * @return void
	 */
	function cafe_coffee_blocks_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cafe-coffee-blocks-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cafe-coffee-blocks-style' );

		wp_style_add_data( 'cafe-coffee-blocks-style', 'rtl', 'replace' );

		wp_enqueue_style( 'dashicons' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'cafe_coffee_blocks_styles' );


/* Enqueue Custom Js */
function cafe_coffee_blocks_scripts() {

	wp_enqueue_script(
        'cafe-coffee-blocks-scroll-to-top', 
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js', 
        array(), 
        null, 
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'cafe_coffee_blocks_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// TGM
require get_template_directory() . '/inc/tgm/plugin-activation.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Get Notice
require get_template_directory() . '/get-started/notice.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';