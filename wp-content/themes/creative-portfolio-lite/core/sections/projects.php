<?php if ( get_theme_mod('creative_portfolio_lite_projects_section_enable',false) ) : ?>

<div class="project py-5">
	<div class="container">
		<?php if ( get_theme_mod('creative_portfolio_lite_projects_text_enable',true) ) : ?>
		<?php if ( get_theme_mod('creative_portfolio_lite_projects_heading_text') ) : ?>
			<h6 class="text-center"><?php echo esc_html(get_theme_mod('creative_portfolio_lite_projects_heading_text')); ?></h6>
		<?php endif; ?>
		<?php endif; ?>
		<?php if ( get_theme_mod('creative_portfolio_lite_projects_heading_enable',true) ) : ?>
		<?php if ( get_theme_mod('creative_portfolio_lite_projects_heading') ) : ?>
			<h3 class="pb-4 text-center"><?php echo esc_html(get_theme_mod('creative_portfolio_lite_projects_heading')); ?></h3>
		<?php endif; ?>
		<?php endif; ?>
		<div class="tab text-center">
	        <?php $creative_portfolio_lite_featured_post = get_theme_mod('creative_portfolio_lite_projects_number', '');
	          	for ( $creative_portfolio_lite_j = 1; $creative_portfolio_lite_j <= $creative_portfolio_lite_featured_post; $creative_portfolio_lite_j++ ){ ?>
          		<button class="tablinks me-2 mr-md-3" onclick="creative_portfolio_lite_projects_tab(event, '<?php $creative_portfolio_lite_main_id = get_theme_mod('creative_portfolio_lite_projects_text'.$creative_portfolio_lite_j); $creative_portfolio_lite_tab_id = str_replace(' ', '-', $creative_portfolio_lite_main_id); echo $creative_portfolio_lite_tab_id; ?> ')">
	          	<?php echo esc_html(get_theme_mod('creative_portfolio_lite_projects_text'.$creative_portfolio_lite_j)); ?></button>
	        <?php }?>
      	</div>

  	  	<?php for ( $creative_portfolio_lite_j = 1; $creative_portfolio_lite_j <= $creative_portfolio_lite_featured_post; $creative_portfolio_lite_j++ ){ ?>
	        <div id="<?php $creative_portfolio_lite_main_id = get_theme_mod('creative_portfolio_lite_projects_text'.$creative_portfolio_lite_j); $creative_portfolio_lite_tab_id = str_replace(' ', '-', $creative_portfolio_lite_main_id); echo $creative_portfolio_lite_tab_id; ?>"  class="tabcontent mt-5">
		        <?php $creative_portfolio_lite_args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' =>  get_theme_mod('creative_portfolio_lite_projects_category'.$creative_portfolio_lite_j),
					'posts_per_page' => 9,
				); ?>
				<div class="row">
				    <?php $creative_portfolio_lite_arr_posts = new WP_Query( $creative_portfolio_lite_args );
				    	if ( $creative_portfolio_lite_arr_posts->have_posts() ) :
				      	while ( $creative_portfolio_lite_arr_posts->have_posts() ) :
				        $creative_portfolio_lite_arr_posts->the_post();
				        ?>
				        <div class="col-lg-4 col-md-6 col-sm-6">
					        <div class="projects_inner_box mb-4 text-center">
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
								<div class="projects_content_box p-3">
					        		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					            </div>
					        </div>
					    </div>
				      	<?php
				    endwhile;
				    wp_reset_postdata();
				    endif; ?>
				</div>
			</div>
		<?php }?>
	</div>
</div>

<?php endif; ?>
