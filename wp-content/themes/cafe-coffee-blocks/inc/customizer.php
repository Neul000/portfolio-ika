<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage cafe-coffee-blocks
 * @since cafe-coffee-blocks 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cafe_coffee_blocks_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Cafe_Coffee_Blocks_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Cafe Coffee Blocks Pro', 'cafe-coffee-blocks' ),
		'button_text'      => __( 'Upgrade Pro', 'cafe-coffee-blocks' ),
		'url'              => 'https://www.wpradiant.net/products/cafe-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'cafe_coffee_blocks_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function cafe_coffee_blocks_custom_control_scripts() {
	wp_enqueue_script( 'cafe-coffee-blocks-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'cafe-coffee-blocks-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'cafe_coffee_blocks_custom_control_scripts' );