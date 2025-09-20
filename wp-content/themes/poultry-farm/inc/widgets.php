<?php
/**
 * Theme widgets.
 *
 * @package poultry_farm
 */

if ( ! function_exists( 'poultry_farm_load_widgets' ) ) :

	/**
	 * Load widgets.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_load_widgets() {

		// Social widget.
		register_widget( 'Poultry_Farm_Social_Widget' );

	}

endif;

add_action( 'widgets_init', 'poultry_farm_load_widgets' );

if ( ! class_exists( 'Poultry_Farm_Social_Widget' ) ) :

	/**
	 * Social widget Class.
	 *
	 * @since 1.0.0
	 */
	class Poultry_Farm_Social_Widget extends poultry_farm_Widget_Base {

		/**
		 * Sets up a new widget instance.
		 *
		 * @since 1.0.0
		 */
		function __construct() {

			$opts = array(
				'classname'                   => 'poultry_farm_widget_social',
				'description'                 => __( 'Displays social icons.', 'poultry-farm' ),
				'customize_selective_refresh' => true,
				);
			$fields = array(
				'title' => array(
					'label' => __( 'Title:', 'poultry-farm' ),
					'type'  => 'text',
					'class' => 'widefat',
					),
				);

			if ( false === has_nav_menu( 'social' ) ) {
				$fields['message'] = array(
					'label' => __( 'Social menu is not set. Please create menu and assign it to Social Menu.', 'poultry-farm' ),
					'type'  => 'message',
					'class' => 'widefat',
					);
			}

			parent::__construct( 'poultry-farm-social', __( 'Social Widget', 'poultry-farm' ), $opts, array(), $fields );

		}

		/**
		 * Outputs the content for the current widget instance.
		 *
		 * @since 1.0.0
		 *
		 * @param array $args     Display arguments.
		 * @param array $instance Settings for the current widget instance.
		 */
		function widget( $args, $instance ) {

			$params = $this->get_params( $instance );

			echo $args['before_widget'];

			if ( ! empty( $params['title'] ) ) {
				echo $args['before_title'] . $params['title'] . $args['after_title'];
			}

			if ( has_nav_menu( 'social' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'social',
					'container'      => false,
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) );
			}

			echo $args['after_widget'];

		}
	}
endif;
