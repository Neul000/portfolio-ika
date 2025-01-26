<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage cafe-coffee-blocks
 * @since cafe-coffee-blocks 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since cafe-coffee-blocks 1.0
	 *
	 * @return void
	 */
	function cafe_coffee_blocks_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'cafe-coffee-blocks-border',
				'label' => esc_html__( 'Borders', 'cafe-coffee-blocks' ),
			)
		);

		
	}
	add_action( 'init', 'cafe_coffee_blocks_register_block_styles' );
}