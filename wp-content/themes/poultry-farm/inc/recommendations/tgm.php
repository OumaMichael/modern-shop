<?php

require get_template_directory() . '/inc/recommendations/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function poultry_farm_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Mizan Demo Importor', 'poultry-farm' ),
			'slug'             => 'mizan-demo-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ultimate Post Kit', 'poultry-farm' ),
			'slug'             => 'ultimate-post-kit',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Elementor', 'poultry-farm' ),
			'slug'             => 'elementor',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	poultry_farm_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'poultry_farm_register_recommended_plugins' );