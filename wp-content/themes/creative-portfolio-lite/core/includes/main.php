<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_creative_portfolio_lite_dismissed_notice_handler', 'creative_portfolio_lite_ajax_notice_handler' );

function creative_portfolio_lite_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function creative_portfolio_lite_deprecated_hook_admin_notice() {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

            <?php
            $current_screen = get_current_screen();
				if ( $current_screen->id !== 'appearance_page_creative-portfolio-lite-guide-page' && $current_screen->id != 'migy_image_gallery_page_migy_templates' ) {
             $creative_portfolio_lite_comments_theme = wp_get_theme(); ?>
            <div class="creative-portfolio-lite-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="creative-portfolio-lite-notice">
				<div class="creative-portfolio-lite-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'creative-portfolio-lite'); ?>">
				</div>
				<div class="creative-portfolio-lite-notice-content">
					<div class="creative-portfolio-lite-notice-heading"><?php esc_html_e('Thanks for installing ','creative-portfolio-lite'); ?><?php echo esc_html( $creative_portfolio_lite_comments_theme ); ?></div>
					<p><?php printf(__('To avail the benefits of the premium edition, kindly click on <a href="%s">More Options</a>.', 'creative-portfolio-lite'), esc_url(admin_url('themes.php?page=creative-portfolio-lite-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'creative_portfolio_lite_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'creative_portfolio_lite_getting_started' );
function creative_portfolio_lite_getting_started() {
	add_theme_page( esc_html__('Get Started', 'creative-portfolio-lite'), esc_html__('Get Started', 'creative-portfolio-lite'), 'edit_theme_options', 'creative-portfolio-lite-guide-page', 'creative_portfolio_lite_test_guide');
}

function creative_portfolio_lite_admin_enqueue_scripts() {
	wp_enqueue_style( 'creative-portfolio-lite-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'creative-portfolio-lite-admin-script', get_template_directory_uri() . '/js/creative-portfolio-lite-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'creative-portfolio-lite-admin-script', 'creative_portfolio_lite_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'creative_portfolio_lite_admin_enqueue_scripts' );

if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_DOCS_FREE' ) ) {
define('CREATIVE_PORTFOLIO_LITE_DOCS_FREE',__('https://demo.misbahwp.com/docs/creative-portfolio-free-docs/','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_DOCS_PRO' ) ) {
define('CREATIVE_PORTFOLIO_LITE_DOCS_PRO',__('https://demo.misbahwp.com/docs/creative-portfolio-pro-docs','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_BUY_NOW' ) ) {
define('CREATIVE_PORTFOLIO_LITE_BUY_NOW',__('https://www.misbahwp.com/products/creative-portfolio-wordpress-theme','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_SUPPORT_FREE' ) ) {
define('CREATIVE_PORTFOLIO_LITE_SUPPORT_FREE',__('https://wordpress.org/support/theme/creative-portfolio-lite','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_REVIEW_FREE' ) ) {
define('CREATIVE_PORTFOLIO_LITE_REVIEW_FREE',__('https://wordpress.org/support/theme/creative-portfolio-lite/reviews/#new-post','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_DEMO_PRO' ) ) {
define('CREATIVE_PORTFOLIO_LITE_DEMO_PRO',__('https://demo.misbahwp.com/creative-portfolio/','creative-portfolio-lite'));
}
if( ! defined( 'CREATIVE_PORTFOLIO_LITE_THEME_BUNDLE' ) ) {
define('CREATIVE_PORTFOLIO_LITE_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','creative-portfolio-lite'));
}

function creative_portfolio_lite_test_guide() { ?>
	<?php $creative_portfolio_lite_theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'creative-portfolio-lite' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'creative-portfolio-lite' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'creative-portfolio-lite' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'creative-portfolio-lite' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','creative-portfolio-lite'); ?><?php echo esc_html( $creative_portfolio_lite_theme ); ?>  <span><?php esc_html_e('Version: ', 'creative-portfolio-lite'); ?><?php echo esc_html($creative_portfolio_lite_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-insidee">
					<?php
						$creative_portfolio_lite_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $creative_portfolio_lite_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'creative-portfolio-lite' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','creative-portfolio-lite'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'creative-portfolio-lite' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'creative-portfolio-lite' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'creative-portfolio-lite' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'creative-portfolio-lite' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','creative-portfolio-lite'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','creative-portfolio-lite'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','creative-portfolio-lite'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'creative-portfolio-lite' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','creative-portfolio-lite'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','creative-portfolio-lite'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','creative-portfolio-lite'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
