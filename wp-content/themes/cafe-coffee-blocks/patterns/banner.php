<?php
/**
 * Banner Section
 * 
 * slug: cafe-coffee-blocks/banner
 * title: Banner
 * categories: cafe-coffee-blocks
 */

return array(
    'title'      =>__( 'Banner', 'cafe-coffee-blocks' ),
    'categories' => array( 'cafe-coffee-blocks' ),
    'content'    => '<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"80%"}} -->
<div class="wp-block-cover is-light banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","className":"banner-column-section01"} -->
<div class="wp-block-columns are-vertically-aligned-center banner-column-section01"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"column-section01"} -->
<div class="wp-block-column is-vertically-aligned-center column-section01" style="flex-basis:50%"><!-- wp:image {"id":72,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" alt="" class="wp-image-72"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"banner-column-section02"} -->
<div class="wp-block-columns are-vertically-aligned-center banner-column-section02"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"column-section01","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center column-section01" style="flex-basis:50%"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"28px","lineHeight":"1.6"}},"textColor":"background","fontFamily":"firasans"} -->
<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-firasans-font-family" style="font-size:28px;line-height:1.6">'. esc_html__('Savor Every Sip, Relish Every Bite – Your Daily Retreat Awaits!','cafe-coffee-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"small","fontFamily":"firasans"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-firasans-font-family has-small-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.','cafe-coffee-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->',
);