<?php
/**
 * Category Section
 * 
 * slug: cafe-coffee-blocks/form-section
 * title: Form Section
 * categories: cafe-coffee-blocks
 */

 $cafe_coffee_blocks_plugins_list = get_option( 'active_plugins' );
 $cafe_coffee_blocks_plugin = 'contact-form-7/wp-contact-form-7.php';
 $cafe_coffee_blocks_results = in_array( $cafe_coffee_blocks_plugin , $cafe_coffee_blocks_plugins_list);
 if ( $cafe_coffee_blocks_results )  {

return array(
    'title'      =>__( 'Form Section', 'cafe-coffee-blocks' ),
    'categories' => array( 'cafe-coffee-blocks' ),
    'content'    => '<!-- wp:group {"className":"form-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group form-section"><!-- wp:shortcode -->
[contact-form-7 id="1234" title="Contact form 1"]
<!-- /wp:shortcode --></div>
<!-- /wp:group -->',
);

} else {

return array(
        'title'      =>__( 'Form Section', 'cafe-coffee-blocks' ),
        'categories' => array( 'cafe-coffee-blocks' ),
        'content'    => '<!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
    );

} 