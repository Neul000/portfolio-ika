<?php

class Creative_Portfolio_Lite_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $creative_portfolio_lite_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $creative_portfolio_lite_recommended_actions_title;
	
	private $creative_portfolio_lite_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $creative_portfolio_lite_install_button_label;
	
	private $creative_portfolio_lite_activate_button_label;
	
	private $creative_portfolio_lite_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Creative_Portfolio_Lite_Customizer_Notify ) ) {
			self::$instance = new Creative_Portfolio_Lite_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $creative_portfolio_lite_customizer_notify_recommended_plugins;
		global $creative_portfolio_lite_customizer_notify_creative_portfolio_lite_recommended_actions;

		global $creative_portfolio_lite_install_button_label;
		global $creative_portfolio_lite_activate_button_label;
		global $creative_portfolio_lite_deactivate_button_label;

		$this->creative_portfolio_lite_recommended_actions = isset( $this->config['creative_portfolio_lite_recommended_actions'] ) ? $this->config['creative_portfolio_lite_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->creative_portfolio_lite_recommended_actions_title = isset( $this->config['creative_portfolio_lite_recommended_actions_title'] ) ? $this->config['creative_portfolio_lite_recommended_actions_title'] : '';
		$this->creative_portfolio_lite_recommended_plugins_title = isset( $this->config['creative_portfolio_lite_recommended_plugins_title'] ) ? $this->config['creative_portfolio_lite_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$creative_portfolio_lite_customizer_notify_recommended_plugins = array();
		$creative_portfolio_lite_customizer_notify_creative_portfolio_lite_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$creative_portfolio_lite_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->creative_portfolio_lite_recommended_actions ) ) {
			$creative_portfolio_lite_customizer_notify_creative_portfolio_lite_recommended_actions = $this->creative_portfolio_lite_recommended_actions;
		}

		$creative_portfolio_lite_install_button_label    = isset( $this->config['creative_portfolio_lite_install_button_label'] ) ? $this->config['creative_portfolio_lite_install_button_label'] : '';
		$creative_portfolio_lite_activate_button_label   = isset( $this->config['creative_portfolio_lite_activate_button_label'] ) ? $this->config['creative_portfolio_lite_activate_button_label'] : '';
		$creative_portfolio_lite_deactivate_button_label = isset( $this->config['creative_portfolio_lite_deactivate_button_label'] ) ? $this->config['creative_portfolio_lite_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'creative_portfolio_lite_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'creative_portfolio_lite_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'creative_portfolio_lite_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'creative_portfolio_lite_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function creative_portfolio_lite_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'creative-portfolio-lite-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/creative-portfolio-lite-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'creative-portfolio-lite-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/creative-portfolio-lite-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'creative-portfolio-lite-customizer-notify-js', 'creativeportfolioliteCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'creative-portfolio-lite' ),
			)
		);

	}

	
	public function creative_portfolio_lite_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/creative-portfolio-lite-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Creative_Portfolio_Lite_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Creative_Portfolio_Lite_Customizer_Notify_Section(
				$wp_customize,
				'creative-portfolio-lite-customizer-notify-section',
				array(
					'title'          => $this->creative_portfolio_lite_recommended_actions_title,
					'plugin_text'    => $this->creative_portfolio_lite_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function creative_portfolio_lite_customizer_notify_dismiss_recommended_action_callback() {

		global $creative_portfolio_lite_customizer_notify_creative_portfolio_lite_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'creative_portfolio_lite_customizer_notify_show' ) ) {

				$creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions = get_option( 'creative_portfolio_lite_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'creative_portfolio_lite_customizer_notify_show', $creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions );

				
			} else {
				$creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions = array();
				if ( ! empty( $creative_portfolio_lite_customizer_notify_creative_portfolio_lite_recommended_actions ) ) {
					foreach ( $creative_portfolio_lite_customizer_notify_creative_portfolio_lite_recommended_actions as $creative_portfolio_lite_lite_customizer_notify_recommended_action ) {
						if ( $creative_portfolio_lite_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions[ $creative_portfolio_lite_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions[ $creative_portfolio_lite_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'creative_portfolio_lite_customizer_notify_show', $creative_portfolio_lite_customizer_notify_show_creative_portfolio_lite_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function creative_portfolio_lite_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$creative_portfolio_lite_lite_customizer_notify_show_recommended_plugins = get_option( 'creative_portfolio_lite_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$creative_portfolio_lite_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$creative_portfolio_lite_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'creative_portfolio_lite_customizer_notify_show_recommended_plugins', $creative_portfolio_lite_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
