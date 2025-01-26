<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function creative_portfolio_lite_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );
	
	wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'creative_portfolio_lite_enqueue_google_fonts' );

if (!function_exists('creative_portfolio_lite_enqueue_scripts')) {

	function creative_portfolio_lite_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl-carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('creative-portfolio-lite-style', get_stylesheet_uri(), array() );

		wp_style_add_data('creative-portfolio-lite-style', 'rtl', 'replace');

		wp_enqueue_style(
			'creative-portfolio-lite-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'creative-portfolio-lite-woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('dashicons');

		wp_enqueue_script(
			'creative-portfolio-lite-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl-carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'creative-portfolio-lite-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( get_theme_mod( 'creative_portfolio_lite_animation_enabled', true ) ) {
			wp_enqueue_script(
				'creative-portfolio-lite-wow-script',
				get_template_directory_uri() . '/js/wow.js',
				array( 'jquery' ),
				'1.0',
				true
			);

			wp_enqueue_style(
				'creative-portfolio-lite-animate',
				get_template_directory_uri() . '/css/animate.css',
				array(),
				'4.1.1'
			);
		}

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$css = '';

		if ( get_header_image() ) :

			$css .=  '
				#site-navigation{
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'creative-portfolio-lite-style', $css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'creative-portfolio-lite-style',$creative_portfolio_lite_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'creative_portfolio_lite_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('creative_portfolio_lite_after_setup_theme')) {

	function creative_portfolio_lite_after_setup_theme() {

		load_theme_textdomain( 'creative-portfolio-lite', get_stylesheet_directory() . '/languages' );

		if ( ! isset( $content_width ) ) $content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'creative-portfolio-lite' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100,
			'flex-height' => true,
			'flex-width'  => true,
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'creative_portfolio_lite_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/customizer-notice/creative-portfolio-lite-customizer-notify.php';
require get_template_directory() .'/core/includes/theme-breadcrumb.php';
require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function creative_portfolio_lite_logo_resizer() {

    $creative_portfolio_lite_theme_logo_size_css = '';
    $creative_portfolio_lite_logo_resizer = get_theme_mod('creative_portfolio_lite_logo_resizer');

	$creative_portfolio_lite_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($creative_portfolio_lite_logo_resizer).'px !important;
			width: '.esc_attr($creative_portfolio_lite_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'creative-portfolio-lite-style',$creative_portfolio_lite_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'creative_portfolio_lite_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function creative_portfolio_lite_global_color() {

    $creative_portfolio_lite_theme_color_css = '';
    $creative_portfolio_lite_global_color = get_theme_mod('creative_portfolio_lite_global_color');
    $creative_portfolio_lite_copyright_bg = get_theme_mod('creative_portfolio_lite_copyright_bg');

	$creative_portfolio_lite_theme_color_css = '
		nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wp-block-woocommerce-cart .wc-block-components-product-badge,.wp-block-button__link,#main-menu ul.children li a:hover,#main-menu ul.sub-menu li a:hover,.post-button a,.blog_box h4,p.slider-button a,.slider button.owl-prev i, .slider button.owl-next i,.project .tablinks:hover, .project .tablinks.active,.pagination .nav-links a:hover,.pagination .nav-links a:focus,.pagination .nav-links span.current,.creative-portfolio-lite-pagination span.current,.creative-portfolio-lite-pagination span.current:hover,.creative-portfolio-lite-pagination span.current:focus,.creative-portfolio-lite-pagination a span:hover,.creative-portfolio-lite-pagination a span:focus,.woocommerce nav.woocommerce-pagination ul li span.current,.comment-respond input#submit,.comment-reply a,.sidebar-area h4.title, .sidebar-area h1.wp-block-heading,.sidebar-area h2.wp-block-heading,.sidebar-area h3.wp-block-heading,.sidebar-area h4.wp-block-heading,.sidebar-area h5.wp-block-heading,.sidebar-area h6.wp-block-heading,.sidebar-area .wp-block-search__label,.sidebar-area .wp-block-search__button,.sidebar-area .tagcloud a, p.wp-block-tag-cloud a,.searchform input[type=submit], .sidebar-area .wp-block-search__button,.searchform input[type=submit]:hover,.searchform input[type=submit]:focus,.scroll-up a{
		background: '.esc_attr($creative_portfolio_lite_global_color).';
		}
		.searchform input[type=submit]:hover,.searchform input[type=submit]:focus{
		background-color: '.esc_attr($creative_portfolio_lite_global_color).';
		}
		a:hover,a:focus,.topheader span i,.home-info i,#main-menu a:hover,#main-menu ul li a:hover,#main-menu li:hover > a,#main-menu a:focus,#main-menu ul li a:focus,#main-menu li.focus > a,#main-menu li:focus > a,#main-menu ul li.current-menu-item > a,#main-menu ul li.current_page_item > a,#main-menu ul li.current-menu-parent > a,#main-menu ul li.current_page_ancestor > a,#main-menu ul li.current-menu-ancestor > a,.post-meta i,.bread_crumb a:hover,.bread_crumb span,.woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price,.project h6{
			color: '.esc_attr($creative_portfolio_lite_global_color).';
		}
		p.slider-button a,.project .tablinks:hover, .project .tablinks.active{
			box-shadow: -8px 8px 18px 1px '.esc_attr($creative_portfolio_lite_global_color).';
		}
		@media screen and (min-width: 320px) and (max-width: 767px) {
		    .menu-toggle, .dropdown-toggle,button.close-menu {
		        background: '.esc_attr($creative_portfolio_lite_global_color).';
		    }
		}
    	.copyright {
			background: '.esc_attr($creative_portfolio_lite_copyright_bg).';
		}
	';
    wp_add_inline_style( 'creative-portfolio-lite-style',$creative_portfolio_lite_theme_color_css );
    wp_add_inline_style( 'creative-portfolio-lite-woocommerce-css',$creative_portfolio_lite_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'creative_portfolio_lite_global_color' );


/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('creative_portfolio_lite_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function creative_portfolio_lite_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'creative-portfolio-lite');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'creative-portfolio-lite'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'creative-portfolio-lite'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'creative-portfolio-lite' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'creative-portfolio-lite'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for creative_portfolio_lite_comment()

if (!function_exists('creative_portfolio_lite_widgets_init')) {

	function creative_portfolio_lite_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','creative-portfolio-lite'),
			'id'   => 'creative-portfolio-lite-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'creative-portfolio-lite'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 2','creative-portfolio-lite'),
			'id'   => 'creative-portfolio-lite-sidebar-2',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'creative-portfolio-lite'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 3','creative-portfolio-lite'),
			'id'   => 'creative-portfolio-lite-sidebar-3',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'creative-portfolio-lite'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','creative-portfolio-lite'),
			'id'   => 'creative-portfolio-lite-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'creative-portfolio-lite'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'creative_portfolio_lite_widgets_init' );

}

function creative_portfolio_lite_get_categories_select() {
	$teh_cats = get_categories();
	$results = array();
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'creative_portfolio_lite_loop_columns');
if (!function_exists('creative_portfolio_lite_loop_columns')) {
	function creative_portfolio_lite_loop_columns() {
		$creative_portfolio_lite_columns = get_theme_mod( 'creative_portfolio_lite_per_columns', 3 );
		return $creative_portfolio_lite_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'creative_portfolio_lite_per_page', 20 );
function creative_portfolio_lite_per_page( $creative_portfolio_lite_cols ) {
  	$creative_portfolio_lite_cols = get_theme_mod( 'creative_portfolio_lite_product_per_page', 9 );
	return $creative_portfolio_lite_cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'creative_portfolio_lite_products_args' );
function creative_portfolio_lite_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}

function creative_portfolio_lite_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

add_action('after_switch_theme', 'creative_portfolio_lite_setup_options');
function creative_portfolio_lite_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

//add animation class
if ( class_exists( 'WooCommerce' ) ) { 
	add_filter('post_class', function($creative_portfolio_lite, $class, $product_id) {
	    if( is_shop() || is_product_category() ){
	        
	        $creative_portfolio_lite = array_merge(['wow','zoomIn'], $creative_portfolio_lite);
	    }
	    return $creative_portfolio_lite;
	},10,3);
} ?>