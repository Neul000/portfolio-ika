<?php if ( get_theme_mod('creative_portfolio_lite_blog_box_enable',false) ) : ?>

<?php $creative_portfolio_lite_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('creative_portfolio_lite_blog_slide_category'),
  'posts_per_page' => get_theme_mod('creative_portfolio_lite_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $creative_portfolio_lite_arr_posts = new WP_Query( $creative_portfolio_lite_args );
    if ( $creative_portfolio_lite_arr_posts->have_posts() ) :
      while ( $creative_portfolio_lite_arr_posts->have_posts() ) :
        $creative_portfolio_lite_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
           <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0 wow zoomIn">
            <?php if ( get_theme_mod('creative_portfolio_lite_slider_extra_text') ) : ?>
              <h4><?php echo esc_html( get_theme_mod('creative_portfolio_lite_slider_extra_text' ) ); ?></h4>
            <?php endif; ?>
            <?php if ( get_theme_mod('creative_portfolio_lite_title_unable_disable',true) ) : ?>
              <h3 class="my-3"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('creative_portfolio_lite_button_unable_disable',true) ) : ?>
              <div class="slide-btn">
                <p class="slider-button mt-4">
                  <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Hire Us','creative-portfolio-lite'); ?></a>
                </p>
                <?php if ( get_theme_mod('creative_portfolio_lite_second_url') ) : ?>
                  <p class="slider-button mt-4 ms-3">
                    <a class="btn-2" href="<?php echo esc_url( get_theme_mod('creative_portfolio_lite_second_url' ) ); ?>"><?php esc_html_e('VIEW SHOWCASE','creative-portfolio-lite'); ?></a>
                  </p>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
  <?php $creative_portfolio_lite_settings = get_theme_mod( 'creative_portfolio_lite_social_links_settings' ); ?>
  <div class="home-social-link social-links">
    <span class="me-2"><?php esc_html_e('FOLLOW US','creative-portfolio-lite'); ?></span>
    <?php if ( is_array($creative_portfolio_lite_settings) || is_object($creative_portfolio_lite_settings) ){ ?>
      <?php foreach( $creative_portfolio_lite_settings as $creative_portfolio_lite_setting ) { ?>
        <a href="<?php echo esc_url( $creative_portfolio_lite_setting['link_url'] ); ?>">
            <i class="<?php echo esc_attr( $creative_portfolio_lite_setting['link_text'] ); ?>"></i>
        </a>
      <?php } ?>
    <?php } ?>
  </div>
  <div class="home-info">
    <?php if ( get_theme_mod('creative_portfolio_lite_header_phone_number') ) : ?>
      <span class="me-3"><i class="fas fa-phone me-2"></i><?php echo esc_html( get_theme_mod('creative_portfolio_lite_header_phone_number' ) ); ?></span>
    <?php endif; ?>

    <?php if ( get_theme_mod('creative_portfolio_lite_header_email_address') ) : ?>
      <span><i class="fas fa-envelope me-2"></i><?php echo esc_html( get_theme_mod('creative_portfolio_lite_header_email_address' ) ); ?></span>
    <?php endif; ?>
  </div>
</div>

<?php endif; ?>
