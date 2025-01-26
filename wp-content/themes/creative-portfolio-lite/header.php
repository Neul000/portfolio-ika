<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'creative-portfolio-lite' ); ?></a>

<?php if(get_theme_mod('creative_portfolio_lite_site_loader',false)!= ''){ ?>
    <?php if(get_theme_mod( 'creative_portfolio_lite_preloader_type','four-way-loader') == 'four-way-loader'){ ?>
	    <div class="cssloader">
	    	<div class="sh1"></div>
	    	<div class="sh2"></div>
	    	<h1 class="lt"><?php esc_html_e( 'loading',  'creative-portfolio-lite' ); ?></h1>
	    </div>
    <?php }else if(get_theme_mod( 'creative_portfolio_lite_preloader_type') == 'cube-loader') {?>
		<div class="cssloader">
    		<div class="loader-main ">
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
			</div>
    	</div>
    <?php }?>
<?php }?>

<div class="topheader py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-7 align-self-center text-center text-md-start">
				<?php if ( get_theme_mod('creative_portfolio_lite_header_phone_number') ) : ?>
					<span class="me-3"><i class="fas fa-phone me-2"></i><?php echo esc_html( get_theme_mod('creative_portfolio_lite_header_phone_number' ) ); ?></span>
				<?php endif; ?>

				<?php if ( get_theme_mod('creative_portfolio_lite_header_email_address') ) : ?>
					<span><i class="fas fa-envelope me-2"></i><?php echo esc_html( get_theme_mod('creative_portfolio_lite_header_email_address' ) ); ?></span>
				<?php endif; ?>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-5 align-self-center">
				<?php $creative_portfolio_lite_settings = get_theme_mod( 'creative_portfolio_lite_social_links_settings' ); ?>
				<div class="social-links text-center text-md-end">
					<?php if ( is_array($creative_portfolio_lite_settings) || is_object($creative_portfolio_lite_settings) ){ ?>
					    	<?php foreach( $creative_portfolio_lite_settings as $creative_portfolio_lite_setting ) { ?>
					    		<span class="me-2"><?php esc_html_e('FOLLOW US','creative-portfolio-lite'); ?></span>
						        <a href="<?php echo esc_url( $creative_portfolio_lite_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $creative_portfolio_lite_setting['link_text'] ); ?>"></i>
						        </a>
					    	<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-start py-2 wow fadeInDown">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php the_custom_logo(); ?>
			    	</div>
			    	<div class="logo-content text-center text-lg-start">
				    	<?php
				    		if ( get_theme_mod('creative_portfolio_lite_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('creative_portfolio_lite_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-6 col-md-9 col-sm-9 align-self-center">
				<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
					<span aria-hidden="true"><?php esc_html_e( 'Menu', 'creative-portfolio-lite' ); ?></span>
				</button>
				<nav id="main-menu" class="close-panal">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => 'false'
						));
					?>
					<button class="close-menu my-2 p-2" type="button">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</nav>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
				<?php if ( get_theme_mod('creative_portfolio_lite_header_hire_us_txt') || get_theme_mod('creative_portfolio_lite_header_hire_us_lnk') ) : ?>
				<p class="slider-button text-md-end text-center my-3 my-md-0"><a href="<?php echo esc_url( get_theme_mod('creative_portfolio_lite_header_hire_us_lnk' ) ); ?>"><?php echo esc_html( get_theme_mod('creative_portfolio_lite_header_hire_us_txt' ) ); ?></a></p>
				<?php endif; ?>
	       	</div>
	   	</div>
	</div>
</header>
