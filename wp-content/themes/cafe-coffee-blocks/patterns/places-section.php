<?php
/**
 * Category Section
 * 
 * slug: cafe-coffee-blocks/places-section
 * title: Places Section
 * categories: cafe-coffee-blocks
 */


 $cafe_coffee_blocks_plugins_list = get_option( 'active_plugins' );
 $cafe_coffee_blocks_plugin = 'gmap-block/gmap-block.php';
 $cafe_coffee_blocks_results = in_array( $cafe_coffee_blocks_plugin , $cafe_coffee_blocks_plugins_list);
 if ( $cafe_coffee_blocks_results )  {

return array(
    'title'      =>__( 'Places Section', 'cafe-coffee-blocks' ),
    'categories' => array( 'cafe-coffee-blocks' ),
    'content'    => '<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"services-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group services-box"><!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-group"><!-- wp:heading {"level":1,"className":"project-main-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"0"}}},"textColor":"accent","fontFamily":"firasans"} -->
<h1 class="wp-block-heading project-main-heading has-accent-color has-text-color has-link-color has-firasans-font-family" style="margin-bottom:0;padding-bottom:0;font-size:18px;font-style:normal;font-weight:700">'. esc_html__('Our Places','cafe-coffee-blocks') .'</h1>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-firasans-font-family" style="padding-bottom:var(--wp--preset--spacing--30);font-size:30px;font-style:normal;font-weight:600">'. esc_html__('Cozy corners, vibrant vibes.','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"places-column","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns places-column"><!-- wp:column {"className":"map-column","layout":{"type":"default"}} -->
<div class="wp-block-column map-column"><!-- wp:gmap/gmap-block {"address":"Williams Tower, 41st Floor, 2800 Post Oak Boulevard Houston, TX 77056","zoom":13,"gmap_mapHeightRanges":{"desk":382,"tab":"","mob":""},"uniqueId":"gmap-block-8bhnzzd4","blockStyle":"\n        \n        .gmap-block-8bhnzzd4.wp-block-gmap-gmap-block iframe{height:382px;}\n    \n        @media (max-width: 1024px) and (min-width: 768px) {\n            \n         \n    \n        }\n        @media (max-width: 767px) {\n            \n         \n    \n        }\n    "} -->
<div class="wp-block-gmap-gmap-block gmap-block-8bhnzzd4"><iframe src="https://maps.google.com/maps?q=Williams+Tower%2C+41st+Floor%2C+2800+Post+Oak+Boulevard+Houston%2C+TX+77056&amp;z=13&amp;t=roadmap&amp;output=embed" class="embd-map" title="Williams Tower, 41st Floor, 2800 Post Oak Boulevard Houston, TX 77056"></iframe></div>
<!-- /wp:gmap/gmap-block --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"post-column"} -->
<div class="wp-block-column post-column"><!-- wp:columns {"className":"post-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns post-main" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"width":"33.33%","className":"post-image"} -->
<div class="wp-block-column post-image" style="flex-basis:33.33%"><!-- wp:image {"id":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/place01.png" alt="" class="wp-image-56"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","className":"post-content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column post-content" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","fontSize":"small","fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-text-align-left has-firasans-font-family has-small-font-size">'. esc_html__('Magneto Chamber','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"medium","fontFamily":"firasans"} -->
<p class="has-text-align-left has-firasans-font-family has-medium-font-size">'. esc_html__('Williams Tower, 41st Floor, 2800 Post Oak Boulevard Houston, TX 77056','cafe-coffee-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"post-button"} -->
<div class="wp-block-buttons post-button"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small","fontFamily":"firasans"} -->
<div class="wp-block-button has-custom-font-size has-firasans-font-family has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('View More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"post-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns post-main" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"width":"33.33%","className":"post-image"} -->
<div class="wp-block-column post-image" style="flex-basis:33.33%"><!-- wp:image {"id":58,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/place02.png" alt="" class="wp-image-58" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","className":"post-content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column post-content" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","fontSize":"small","fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-text-align-left has-firasans-font-family has-small-font-size">'. esc_html__('Marriot Bonvoy','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"medium","fontFamily":"firasans"} -->
<p class="has-text-align-left has-firasans-font-family has-medium-font-size">'. esc_html__('1717 Pennsylvania Avenue NW, 10th Floor Washington, D.C. 20006','cafe-coffee-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"post-button"} -->
<div class="wp-block-buttons post-button"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small","fontFamily":"firasans"} -->
<div class="wp-block-button has-custom-font-size has-firasans-font-family has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('View More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"post-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns post-main" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"width":"33.33%","className":"post-image"} -->
<div class="wp-block-column post-image" style="flex-basis:33.33%"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/place03.png" alt="" class="wp-image-59"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","className":"post-content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column post-content" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","fontSize":"small","fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-text-align-left has-firasans-font-family has-small-font-size">'. esc_html__('Cafe Aura','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"medium","fontFamily":"firasans"} -->
<p class="has-text-align-left has-firasans-font-family has-medium-font-size">'. esc_html__('301 Portola Street john Building San Francisco California 770147','cafe-coffee-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"post-button"} -->
<div class="wp-block-buttons post-button"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small","fontFamily":"firasans"} -->
<div class="wp-block-button has-custom-font-size has-firasans-font-family has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('View More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"className":"load-more-button"} -->
<div class="wp-block-buttons load-more-button"><!-- wp:button {"backgroundColor":"secaccent","className":"is-style-fill","fontFamily":"firasans"} -->
<div class="wp-block-button is-style-fill has-firasans-font-family"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button">'. esc_html__('Load More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);

} else {

    return array(
        'title'      =>__( 'Product Section', 'cafe-coffee-blocks' ),
        'categories' => array( 'cafe-coffee-blocks' ),
        'content'    => '<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"services-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group services-box"><!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-group"><!-- wp:heading {"level":1,"className":"project-main-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"0"}}},"textColor":"accent","fontFamily":"firasans"} -->
<h1 class="wp-block-heading project-main-heading has-accent-color has-text-color has-link-color has-firasans-font-family" style="margin-bottom:0;padding-bottom:0;font-size:18px;font-style:normal;font-weight:700">'. esc_html__('Our Places','cafe-coffee-blocks') .'</h1>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-firasans-font-family" style="padding-bottom:var(--wp--preset--spacing--30);font-size:30px;font-style:normal;font-weight:600">'. esc_html__('Cozy corners, vibrant vibes.','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":null,"className":"places-column","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns places-column"><!-- wp:column {"className":"map-image-column","layout":{"type":"default"}} -->
<div class="wp-block-column map-image-column"><!-- wp:image {"id":62,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/map.png" alt="" class="wp-image-62"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"post-column"} -->
<div class="wp-block-column post-column"><!-- wp:columns {"className":"post-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns post-main" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"width":"33.33%","className":"post-image"} -->
<div class="wp-block-column post-image" style="flex-basis:33.33%"><!-- wp:image {"id":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/place01.png" alt="" class="wp-image-56"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","className":"post-content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column post-content" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","fontSize":"small","fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-text-align-left has-firasans-font-family has-small-font-size">'. esc_html__('Magneto Chamber','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"medium","fontFamily":"firasans"} -->
<p class="has-text-align-left has-firasans-font-family has-medium-font-size">'. esc_html__('Williams Tower, 41st Floor, 2800 Post Oak Boulevard Houston, TX 77056','cafe-coffee-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"post-button"} -->
<div class="wp-block-buttons post-button"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small","fontFamily":"firasans"} -->
<div class="wp-block-button has-custom-font-size has-firasans-font-family has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('View More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"post-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns post-main" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"width":"33.33%","className":"post-image"} -->
<div class="wp-block-column post-image" style="flex-basis:33.33%"><!-- wp:image {"id":58,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/place02.png" alt="" class="wp-image-58" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","className":"post-content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column post-content" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","fontSize":"small","fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-text-align-left has-firasans-font-family has-small-font-size">'. esc_html__('Marriot Bonvoy','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"medium","fontFamily":"firasans"} -->
<p class="has-text-align-left has-firasans-font-family has-medium-font-size">'. esc_html__('1717 Pennsylvania Avenue NW, 10th Floor Washington, D.C. 20006','cafe-coffee-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"post-button"} -->
<div class="wp-block-buttons post-button"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small","fontFamily":"firasans"} -->
<div class="wp-block-button has-custom-font-size has-firasans-font-family has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('View More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"post-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns post-main" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"width":"33.33%","className":"post-image"} -->
<div class="wp-block-column post-image" style="flex-basis:33.33%"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/place03.png" alt="" class="wp-image-59"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","className":"post-content","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column post-content" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","fontSize":"small","fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-text-align-left has-firasans-font-family has-small-font-size">'. esc_html__('Cafe Aura','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"medium","fontFamily":"firasans"} -->
<p class="has-text-align-left has-firasans-font-family has-medium-font-size">'. esc_html__('301 Portola Street john Building San Francisco California 770147','cafe-coffee-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"post-button"} -->
<div class="wp-block-buttons post-button"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"small","fontFamily":"firasans"} -->
<div class="wp-block-button has-custom-font-size has-firasans-font-family has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html__('View More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"className":"load-more-button"} -->
<div class="wp-block-buttons load-more-button"><!-- wp:button {"backgroundColor":"secaccent","className":"is-style-fill","fontFamily":"firasans"} -->
<div class="wp-block-button is-style-fill has-firasans-font-family"><a class="wp-block-button__link has-secaccent-background-color has-background wp-element-button">'. esc_html__('Load More','cafe-coffee-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
 
<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
    );
}