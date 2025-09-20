<?php
/**
 * Theme Options.
 *
 * @package poultry_farm
 */

$default = poultry_farm_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'poultry_farm_theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Typography Section.

$poultry_farm_font_array = array(
	''                       => 'No Fonts',
	'Abril Fatface'          => 'Abril Fatface',
	'Acme'                   => 'Acme',
	'Anton'                  => 'Anton',
	'Architects Daughter'    => 'Architects Daughter',
	'Arimo'                  => 'Arimo',
	'Arsenal'                => 'Arsenal',
	'Arvo'                   => 'Arvo',
	'Alegreya'               => 'Alegreya',
	'Alfa Slab One'          => 'Alfa Slab One',
	'Averia Serif Libre'     => 'Averia Serif Libre',
	'Bangers'                => 'Bangers',
	'Boogaloo'               => 'Boogaloo',
	'Bad Script'             => 'Bad Script',
	'Bitter'                 => 'Bitter',
	'Bree Serif'             => 'Bree Serif',
	'BenchNine'              => 'BenchNine',
	'Cabin'                  => 'Cabin',
	'Cardo'                  => 'Cardo',
	'Courgette'              => 'Courgette',
	'Cherry Swash'           => 'Cherry Swash',
	'Cormorant Garamond'     => 'Cormorant Garamond',
	'Crimson Text'           => 'Crimson Text',
	'Cuprum'                 => 'Cuprum',
	'Cookie'                 => 'Cookie',
	'Chewy'                  => 'Chewy',
	'Days One'               => 'Days One',
	'Dosis'                  => 'Dosis',
	'Droid Sans'             => 'Droid Sans',
	'Economica'              => 'Economica',
	'Fredoka One'            => 'Fredoka One',
	'Fjalla One'             => 'Fjalla One',
	'Francois One'           => 'Francois One',
	'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
	'Gloria Hallelujah'      => 'Gloria Hallelujah',
	'Great Vibes'            => 'Great Vibes',
	'Handlee'                => 'Handlee',
	'Hammersmith One'        => 'Hammersmith One',
	'Inconsolata'            => 'Inconsolata',
	'Indie Flower'           => 'Indie Flower',
	'IM Fell English SC'     => 'IM Fell English SC',
	'Julius Sans One'        => 'Julius Sans One',
	'Josefin Slab'           => 'Josefin Slab',
	'Josefin Sans'           => 'Josefin Sans',
	'Kanit'                  => 'Kanit',
	'Lobster'                => 'Lobster',
	'Lato'                   => 'Lato',
	'Lora'                   => 'Lora',
	'Libre Baskerville'      => 'Libre Baskerville',
	'Lobster Two'            => 'Lobster Two',
	'Merriweather'           => 'Merriweather',
	'Monda'                  => 'Monda',
	'Montserrat'             => 'Montserrat',
	'Muli'                   => 'Muli',
	'Marck Script'           => 'Marck Script',
	'Noto Serif'             => 'Noto Serif',
	'Open Sans'              => 'Open Sans',
	'Overpass'               => 'Overpass',
	'Overpass Mono'          => 'Overpass Mono',
	'Oxygen'                 => 'Oxygen',
	'Orbitron'               => 'Orbitron',
	'Patua One'              => 'Patua One',
	'Pacifico'               => 'Pacifico',
	'Padauk'                 => 'Padauk',
	'Playball'               => 'Playball',
	'Playfair Display'       => 'Playfair Display',
	'PT Sans'                => 'PT Sans',
	'Philosopher'            => 'Philosopher',
	'Permanent Marker'       => 'Permanent Marker',
	'Poiret One'             => 'Poiret One',
	'Quicksand'              => 'Quicksand',
	'Quattrocento Sans'      => 'Quattrocento Sans',
	'Raleway'                => 'Raleway',
	'Rubik'                  => 'Rubik',
	'Rokkitt'                => 'Rokkitt',
	'Russo One'              => 'Russo One',
	'Righteous'              => 'Righteous',
	'Slabo'                  => 'Slabo',
	'Source Sans Pro'        => 'Source Sans Pro',
	'Shadows Into Light Two' => 'Shadows Into Light Two',
	'Shadows Into Light'     => 'Shadows Into Light',
	'Sacramento'             => 'Sacramento',
	'Shrikhand'              => 'Shrikhand',
	'Tangerine'              => 'Tangerine',
	'Ubuntu'                 => 'Ubuntu',
	'VT323'                  => 'VT323',
	'Varela Round'           => 'Varela Round',
	'Vampiro One'            => 'Vampiro One',
	'Vollkorn'               => 'Vollkorn',
	'Volkhov'                => 'Volkhov',
	'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
);

$wp_customize->add_section( 'poultry_farm_typography',
	array(
	'title'      => __( 'Typography', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_body_font_family]',
	array(
	'default'           => $default['poultry_farm_body_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_body_font_family]',
	array(
	'label'    => __( 'Body font family', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'select',
	'choices'  => $poultry_farm_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h1_font_family]',
	array(
	'default'           => $default['poultry_farm_h1_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h1_font_family]',
	array(
	'label'    => __( 'H1 font family', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'select',
	'choices'  => $poultry_farm_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h1_font_size]',
	array(
	'default'           => $default['poultry_farm_h1_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[poultry_farm_h1_font_size]',
	array(
	'label'    => __( 'H1 Font Size', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h2_font_family]',
	array(
	'default'           => $default['poultry_farm_h2_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h2_font_family]',
	array(
	'label'    => __( 'H2 font family', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'select',
	'choices'  => $poultry_farm_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h2_font_size]',
	array(
	'default'           => $default['poultry_farm_h2_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h2_font_size]',
	array(
	'label'    => __( 'H2 Font Size', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h3_font_family]',
	array(
	'default'           => $default['poultry_farm_h3_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h3_font_family]',
	array(
	'label'    => __( 'H3 font family', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'select',
	'choices'  => $poultry_farm_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h3_font_size]',
	array(
	'default'           => $default['poultry_farm_h3_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h3_font_size]',
	array(
	'label'    => __( 'H3 Font Size', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h4_font_family]',
	array(
	'default'           => $default['poultry_farm_h4_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h4_font_family]',
	array(
	'label'    => __( 'H4 font family', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'select',
	'choices'  => $poultry_farm_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h4_font_size]',
	array(
	'default'           => $default['poultry_farm_h4_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h4_font_size]',
	array(
	'label'    => __( 'H4 Font Size', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h5_font_family]',
	array(
	'default'           => $default['poultry_farm_h5_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h5_font_family]',
	array(
	'label'    => __( 'H5 font family', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'select',
	'choices'  => $poultry_farm_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h5_font_size]',
	array(
	'default'           => $default['poultry_farm_h5_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h5_font_size]',
	array(
	'label'    => __( 'H5 Font Size', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_h6_font_family]',
	array(
	'default'           => $default['poultry_farm_h6_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h6_font_family]',
	array(
	'label'    => __( 'H6 font family', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'select',
	'choices'  => $poultry_farm_font_array,
	'priority' => 100,
	)
);
$wp_customize->add_setting( 'theme_options[poultry_farm_h6_font_size]',
	array(
	'default'           => $default['poultry_farm_h6_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_h6_font_size]',
	array(
	'label'    => __( 'H6 Font Size', 'poultry-farm' ),
	'section'  => 'poultry_farm_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Site title And tagline Option

$wp_customize->add_setting( 'theme_options[poultry_farm_site_title_font_size]',
	array(
	'default'           => $default['poultry_farm_site_title_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_site_title_font_size]',
	array(
	'label'    => __( 'Site Title Font Size', 'poultry-farm' ),
	'section'  => 'title_tagline',
	'type'     => 'text',
	'priority' => 10,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_site_tagline_font_size]',
	array(
	'default'           => $default['poultry_farm_site_tagline_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_site_tagline_font_size]',
	array(
	'label'    => __( 'Site Tagline Font Size', 'poultry-farm' ),
	'section'  => 'title_tagline',
	'type'     => 'text',
	'priority' => 10,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_site_title_color]', array(
	'default'           => $default['poultry_farm_site_title_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
	'priority' => 100,
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[poultry_farm_site_title_color]', array(
	'label'       => __( 'Site Title Color', 'poultry-farm' ),
	'section'     => 'title_tagline',
	'settings'    => 'theme_options[poultry_farm_site_title_color]',
	'priority' => 10,
)));

// Global Color

$wp_customize->add_section( 'poultry_farm_section_global_color', array(
	'title'      => __( 'Theme Color', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
));

$wp_customize->add_setting( 'theme_options[poultry_farm_first_color]', array(
	'default'           => $default['poultry_farm_first_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[poultry_farm_first_color]', array(
	'label'       => __( 'Highlight Color', 'poultry-farm' ),
	'description' => __( 'With a single click, you can change the highlight color of the inner page; use the Elementor editor for customization on the homepage.', 'poultry-farm' ),
	'section'     => 'poultry_farm_section_global_color',
	'settings'    => 'theme_options[poultry_farm_first_color]',
)));

// General Option.
$wp_customize->add_section( 'poultry_farm_section_general_option',
	array(
	'title'      => __( 'General Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

// Cursor Dot Outline
$wp_customize->add_setting(
    'theme_options[poultry_farm_enable_cursor_dot_outline]',
    array(
        'default' => $default['poultry_farm_enable_cursor_dot_outline'],
        'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'theme_options[poultry_farm_enable_cursor_dot_outline]',
    array(
        'label' => esc_html__('Enable Cursor Dot Outline', 'poultry-farm'),
        'section' => 'poultry_farm_section_general_option',
        'type' => 'checkbox',
    )
);

// Setting show scroll to top.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_scroll_to_top]',
	array(
	'default'           => $default['poultry_farm_show_scroll_to_top'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_scroll_to_top]',
	array(
	'label'    => __( 'Show Scroll To Top', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Preloader.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_preloader_setting]',
	array(
	'default'           => $default['poultry_farm_show_preloader_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_preloader_setting]',
	array(
	'label'    => __( 'Show Preloader', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Sticky Header.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_data_sticky_setting]',
	array(
	'default'           => $default['poultry_farm_show_data_sticky_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_data_sticky_setting]',
	array(
	'label'    => __( 'Show Sticky Header', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Post Option.
$wp_customize->add_section( 'poultry_farm_section_post_option',
	array(
	'title'      => __( 'Post Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

// Setting show Post date.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_date_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_date_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_date_setting]',
	array(
	'label'    => __( 'Show Post Date', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Heading.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_heading_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_heading_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_heading_setting]',
	array(
	'label'    => __( 'Show Post Heading', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Content.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_content_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_content_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_content_setting]',
	array(
	'label'    => __( 'Show Post Full Content', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post admin.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_admin_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_admin_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_admin_setting]',
	array(
	'label'    => __( 'Show Post Admin', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Categories.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_categories_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_categories_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_categories_setting]',
	array(
	'label'    => __( 'Show Post Categories', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Comments.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_comments_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_comments_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_comments_setting]',
	array(
	'label'    => __( 'Show Post Comments', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Featured Image.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_featured_image_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_featured_image_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_featured_image_setting]',
	array(
	'label'    => __( 'Show Post Featured Image', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Tags.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_post_tags_setting]',
	array(
	'default'           => $default['poultry_farm_show_post_tags_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_post_tags_setting]',
	array(
	'label'    => __( 'Show Post Tags', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting Post Navigation.

$wp_customize->add_setting(
    'theme_options[poultry_farm_enable_post_navigation]',
    array(
        'default' => $default['poultry_farm_enable_post_navigation'],
        'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'theme_options[poultry_farm_enable_post_navigation]',
    array(
        'label' => esc_html__('Enable Post Navigation', 'poultry-farm'),
        'section' => 'poultry_farm_section_post_option',
        'type' => 'checkbox',
    )
);

// Related post

$wp_customize->add_section( 'poultry_farm_related_post_option',
	array(
	'title'      => __( 'Related Post Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

$wp_customize->add_setting(
    'theme_options[poultry_farm_enable_related_post]',
    array(
        'default' => $default['poultry_farm_enable_related_post'],
        'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'theme_options[poultry_farm_enable_related_post]',
    array(
        'label' => esc_html__('Enable Related post', 'poultry-farm'),
        'section' => 'poultry_farm_related_post_option',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'theme_options[poultry_farm_enable_related_post_image]',
    array(
        'default' => $default['poultry_farm_enable_related_post_image'],
        'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'theme_options[poultry_farm_enable_related_post_image]',
    array(
        'label' => esc_html__('Enable Related post Image', 'poultry-farm'),
        'section' => 'poultry_farm_related_post_option',
        'type' => 'checkbox',
    )
);

// Header Section.
$wp_customize->add_section( 'poultry_farm_section_header',
	array(
	'title'      => __( 'Header Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_title]',
	array(
	'default'           => $default['poultry_farm_show_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_title]',
	array(
	'label'    => __( 'Show Site Title', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[poultry_farm_show_tagline]',
	array(
	'default'           => $default['poultry_farm_show_tagline'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_show_tagline]',
	array(
	'label'    => __( 'Show Tagline', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting top header text
$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_text]',
	array(
	'label'    => __( 'Add Text', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting top header location
$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_location]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_location]',
	array(
	'label'    => __( 'Add Location', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_location_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_location_link]',
	array(
	'label'    => __( 'Location Link', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Setting top header email
$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_email]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_email',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_email]',
	array(
	'label'    => __( 'Add Email', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting top header phone
$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_phone_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_phone_text]',
	array(
	'label'    => __( 'Add Phone Text', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting top header phone
$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_phone_number]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_phone_number]',
	array(
	'label'    => __( 'Add Phone Number', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting button Text
$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_button_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_button_text]',
	array(
	'label'    => __( 'Add Button Text', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting button Url
$wp_customize->add_setting( 'theme_options[poultry_farm_header_top_button_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_top_button_link]',
	array(
	'label'    => __( 'Add Button Link', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Contact button link
$wp_customize->add_setting( 'theme_options[poultry_farm_quote_button_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_quote_button_link]',
	array(
	'label'    => __( 'Cart Link', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Social Section.
$wp_customize->add_section( 'poultry_farm_section_social_media',
	array(
	'title'      => __( 'Social Media Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

// facebook button Url
$wp_customize->add_setting( 'theme_options[poultry_farm_header_social_facebook_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_social_facebook_link]',
	array(
	'label'    => __( 'Add Facebook Link', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// twitter button Url
$wp_customize->add_setting( 'theme_options[poultry_farm_header_social_twitter_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_social_twitter_link]',
	array(
	'label'    => __( 'Add Twitter Link', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// instagram button Url
$wp_customize->add_setting( 'theme_options[poultry_farm_header_social_instagram_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_social_instagram_link]',
	array(
	'label'    => __( 'Add Instagram Link', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// youtube button Url
$wp_customize->add_setting( 'theme_options[poultry_farm_header_social_youtube_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_header_social_youtube_link]',
	array(
	'label'    => __( 'Add YouTube Link', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_social_media',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Layout Section.
$wp_customize->add_section( 'poultry_farm_section_layout',
	array(
	'title'      => __( 'Layout Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[poultry_farm_global_layout]',
	array(
	'default'           => $default['poultry_farm_global_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_global_layout]',
	array(
	'label'    => __( 'Global Layout', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_layout',
	'type'     => 'select',
	'choices'  => poultry_farm_get_global_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[poultry_farm_archive_layout]',
	array(
	'default'           => $default['poultry_farm_archive_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_archive_layout]',
	array(
	'label'    => __( 'Archive Layout', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_layout',
	'type'     => 'select',
	'choices'  => poultry_farm_get_archive_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_image.
$wp_customize->add_setting( 'theme_options[poultry_farm_archive_image]',
	array(
	'default'           => $default['poultry_farm_archive_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_archive_image]',
	array(
	'label'    => __( 'Image in Archive', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_layout',
	'type'     => 'select',
	'choices'  => poultry_farm_get_image_sizes_options( true, array( 'disable', 'thumbnail', 'medium', 'large' ), false ),
	'priority' => 100,
	)
);
// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[poultry_farm_archive_image_alignment]',
	array(
	'default'           => $default['poultry_farm_archive_image_alignment'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_archive_image_alignment]',
	array(
	'label'           => __( 'Image Alignment in Archive', 'poultry-farm' ),
	'section'         => 'poultry_farm_section_layout',
	'type'            => 'select',
	'choices'         => poultry_farm_get_image_alignment_options(),
	'priority'        => 100,
	'active_callback' => 'poultry_farm_is_image_in_archive_active',
	)
);
// Setting single_image.
$wp_customize->add_setting( 'theme_options[poultry_farm_single_image]',
	array(
	'default'           => $default['poultry_farm_single_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_single_image]',
	array(
	'label'    => __( 'Image in Single Post/Page', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_layout',
	'type'     => 'select',
	'choices'  => poultry_farm_get_image_sizes_options( true, array( 'disable', 'large' ), false ),
	'priority' => 100,
	)
);

// 404 Page Setting

$wp_customize->add_section( 'poultry_farm_404_page',
	array(
	'title'      => __( '404 Page Settings', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_404_page_title]',
	array(
	'default'           => $default['poultry_farm_404_page_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[poultry_farm_404_page_title]',
	array(
	'label'    => __( 'Add Title', 'poultry-farm' ),
	'section'  => 'poultry_farm_404_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_404_page_text]',
	array(
	'default'           => $default['poultry_farm_404_page_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[poultry_farm_404_page_text]',
	array(
	'label'    => __( 'Add Text', 'poultry-farm' ),
	'section'  => 'poultry_farm_404_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

// No Results Page Setting

$wp_customize->add_section( 'poultry_farm_no_result_page',
	array(
	'title'      => __( 'No Results Page Settings', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_no_result_title]',
	array(
	'default'           => $default['poultry_farm_no_result_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[poultry_farm_no_result_title]',
	array(
	'label'    => __( 'Add Title', 'poultry-farm' ),
	'section'  => 'poultry_farm_no_result_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_no_result_text]',
	array(
	'default'           => $default['poultry_farm_no_result_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[poultry_farm_no_result_text]',
	array(
	'label'    => __( 'Add Text', 'poultry-farm' ),
	'section'  => 'poultry_farm_no_result_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'poultry_farm_section_footer',
	array(
	'title'      => __( 'Footer Options', 'poultry-farm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'poultry_farm_theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[poultry_farm_copyright_text]',
	array(
	'default'           => $default['poultry_farm_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'poultry_farm_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[poultry_farm_copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'poultry-farm' ),
	'section'  => 'poultry_farm_section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[poultry_farm_copyright_background_color]', array(
	'default'           => $default['poultry_farm_copyright_background_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
	'priority' => 100,
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[poultry_farm_copyright_background_color]', array(
	'label'       => __( 'Copyright background Color', 'poultry-farm' ),
	'section'     => 'poultry_farm_section_footer',
	'settings'    => 'theme_options[poultry_farm_copyright_background_color]',
	'priority' => 100,
)));

$wp_customize->add_setting( 'theme_options[poultry_farm_copyright_text_color]', array(
	'default'           => $default['poultry_farm_copyright_text_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
	'priority' => 100,
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[poultry_farm_copyright_text_color]', array(
	'label'       => __( 'Copyright Text Color', 'poultry-farm' ),
	'section'     => 'poultry_farm_section_footer',
	'settings'    => 'theme_options[poultry_farm_copyright_text_color]',
	'priority' => 100,
)));