<?php
/**
 * Header Default
 * 
 * slug: cafe-coffee-blocks/header-default
 * title: Header Default
 * categories: cafe-coffee-blocks
 */

return array(
    'title'      =>__( 'Header Default', 'cafe-coffee-blocks' ),
    'categories' => array( 'cafe-coffee-blocks' ),
    'content'    => '<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"backgroundColor":"thirdaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-box-upper has-thirdaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:columns {"className":"menu-group","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px","topLeft":"10px","topRight":"10px"}}}} -->
<div class="wp-block-columns menu-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-inner-menu"} -->
<div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:40%"><!-- wp:navigation {"textColor":"background","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"small","fontFamily":"firasans","layout":{"type":"flex","justifyContent":"left"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->          
  <!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
  
  <!-- wp:navigation-link {"label":"Service","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
  <!-- wp:navigation-link {"label":"Places","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

  <!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/cafe-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro"} /-->
  
  <!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"0px","bottom":"0px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:var(--wp--preset--spacing--30);padding-bottom:0px;padding-left:var(--wp--preset--spacing--30);flex-basis:20%"><!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-right-menu","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center header-right-menu" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:0;flex-basis:20%"><!-- wp:navigation {"textColor":"background","metadata":{"ignoredHookedBlocks":["woocommerce/mini-cart"]},"fontSize":"small","fontFamily":"firasans","layout":{"type":"flex","justifyContent":"center"}} --><!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->           
  <!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
  <!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-right","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center header-right" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:0;flex-basis:20%"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"header-product-search","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-center header-product-search" style="flex-basis:80%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"10px"}},"textColor":"background"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-account"} -->
<div class="wp-block-column is-vertically-aligned-center header-account" style="flex-basis:20%"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","align":"right","textColor":"background","fontFamily":"firasans","fontSize":"tiny","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);