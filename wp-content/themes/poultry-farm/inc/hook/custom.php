<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package poultry_farm
 */

if ( ! function_exists( 'poultry_farm_skip_to_content' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_skip_to_content() {
	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'poultry-farm' ); ?></a><?php
	}
endif;

add_action( 'poultry_farm_action_before', 'poultry_farm_skip_to_content', 15 );

// Middle Header

if ( ! function_exists( 'poultry_farm_site_branding' ) ) :

	/**
	 * Site branding.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_site_branding() {
		$poultry_farm_header_top_text = poultry_farm_get_option( 'poultry_farm_header_top_text' );

		$poultry_farm_header_top_location = poultry_farm_get_option( 'poultry_farm_header_top_location');
		$poultry_farm_header_top_location_link = poultry_farm_get_option( 'poultry_farm_header_top_location_link' );
		$poultry_farm_header_top_email = poultry_farm_get_option( 'poultry_farm_header_top_email' );

		$poultry_farm_header_top_button_text = poultry_farm_get_option( 'poultry_farm_header_top_button_text' );
		$poultry_farm_header_top_button_link = poultry_farm_get_option( 'poultry_farm_header_top_button_link' );

		$poultry_farm_header_social_facebook_link = poultry_farm_get_option( 'poultry_farm_header_social_facebook_link' );
		$poultry_farm_header_social_twitter_link = poultry_farm_get_option( 'poultry_farm_header_social_twitter_link' );
		$poultry_farm_header_social_instagram_link = poultry_farm_get_option( 'poultry_farm_header_social_instagram_link' );
		$poultry_farm_header_social_youtube_link = poultry_farm_get_option( 'poultry_farm_header_social_youtube_link' );

		$poultry_farm_header_top_phone_text = poultry_farm_get_option( 'poultry_farm_header_top_phone_text' );
		$poultry_farm_header_top_phone_number = poultry_farm_get_option( 'poultry_farm_header_top_phone_number' );

		$poultry_farm_quote_button_link = poultry_farm_get_option( 'poultry_farm_quote_button_link' );

		$poultry_farm_data_sticky = poultry_farm_get_option( 'poultry_farm_show_data_sticky_setting' );
		?>

		<div class="topheader">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-5 col-md-5 col-12 align-self-center text-md-start text-center">
						<?php if( !empty($poultry_farm_header_top_text) ):?>
							<p class="mb-0"><?php echo esc_html($poultry_farm_header_top_text);?></p>
						<?php endif; ?>
					</div>
					<div class="col-xl-5 col-lg-7 col-md-7 col-12 align-self-center">
						<div class="topheader-box">
							<?php if( !empty($poultry_farm_header_top_location) ):?>
								<p class="mb-0 topheader-location"><a href="<?php echo esc_url($poultry_farm_header_top_location_link);?>"><span class="dashicons dashicons-location me-2"></span><?php echo esc_html($poultry_farm_header_top_location);?></a></p>
							<?php endif; ?>
							<?php if( !empty($poultry_farm_header_top_email) ):?>
								<p class="mb-0 topheader-mail"><a href="mailto:<?php echo esc_attr($poultry_farm_header_top_email);?>"><span class="dashicons dashicons-email me-2"></span><?php echo esc_html($poultry_farm_header_top_email);?></a></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="bottom-header">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-3 col-md-6 align-self-center ">
					    <div class="site-branding mb-3 mb-lg-0 text-md-start text-center">
							<?php poultry_farm_the_custom_logo(); ?>
							<?php $poultry_farm_show_title = poultry_farm_get_option( 'poultry_farm_show_title' ); ?>
							<?php $poultry_farm_show_tagline = poultry_farm_get_option( 'poultry_farm_show_tagline' ); ?>
							<?php if ( true === $poultry_farm_show_title || true === $poultry_farm_show_tagline ) :  ?>
								<div id="site-identity" class="text-center text-md-start text-lg-start">
									<?php if ( true === $poultry_farm_show_title ) :  ?>
										<?php if ( is_front_page() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php endif; ?>
									<?php endif; ?>
									<?php if ( true === $poultry_farm_show_tagline ) :  ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
					    </div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 align-self-center media-div text-md-end text-center">
						<?php if( !empty($poultry_farm_header_social_facebook_link) ):?>
							<a href="<?php echo esc_url($poultry_farm_header_social_facebook_link);?>" target="_blank" ><span class="dashicons dashicons-facebook-alt"></span></a>
						<?php endif; ?>
						<?php if( !empty($poultry_farm_header_social_twitter_link) ):?>
							<a href="<?php echo esc_url($poultry_farm_header_social_twitter_link);?>" target="_blank" ><span class="dashicons dashicons-twitter"></span></a>
						<?php endif; ?>
						<?php if( !empty($poultry_farm_header_social_instagram_link) ):?>
							<a href="<?php echo esc_url($poultry_farm_header_social_instagram_link);?>" target="_blank" ><span class="dashicons dashicons-instagram"></span></a>
						<?php endif; ?>
						<?php if( !empty($poultry_farm_header_social_youtube_link) ):?>
							<a href="<?php echo esc_url($poultry_farm_header_social_youtube_link);?>" target="_blank" ><span class="dashicons dashicons-youtube"></span></a>
						<?php endif; ?>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 align-self-center">
						<?php if( !empty($poultry_farm_header_top_phone_text) || !empty($poultry_farm_header_top_phone_number) ):?>
							<div class="row top-phone my-3 my-md-0 text-center text-md-start">
								<div class="col-lg-3 col-md-2 align-self-center">
									<span class="dashicons dashicons-phone"></span>
								</div>
								<div class="col-lg-9 col-md-10 align-self-center">
									<p class="mb-0"><?php echo esc_html($poultry_farm_header_top_phone_text);?></p>
									<h5 class="mb-0"><a href="tel:<?php echo esc_html($poultry_farm_header_top_phone_number);?>"><?php echo esc_html($poultry_farm_header_top_phone_number);?></a></h5>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-6 align-self-center">
						<div class="top-btn text-md-end text-center">
							<?php if( !empty($poultry_farm_header_top_button_text) || !empty($poultry_farm_header_top_button_link) ):?>
								<a href="<?php echo esc_url($poultry_farm_header_top_button_link);?>"><?php echo esc_html($poultry_farm_header_top_button_text);?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="middle-header" data-sticky= "<?php echo esc_attr($poultry_farm_data_sticky); ?>">
			<div class="container">
				<div class="center-header-box">
					<div class="row">
						<div class="col-lg-10 col-md-6 col-6 align-self-center">
							<div class="toggle-menu gb_menu">
								<button onclick="poultry_farm_gb_Menu_open()" class="gb_toggle"><span class="dashicons dashicons-menu-alt"></span></button>
							</div>
							<div id="gb_responsive" class="nav side_gb_nav">
								<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'poultry-farm' ); ?>">
									<?php
										wp_nav_menu( array( 
											'theme_location' => 'primary-menu',
											'container_class' => 'gb_navigation clearfix' ,
											'menu_class' => 'clearfix',
											'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
											'fallback_cb' => 'wp_page_menu',
										) );
									?>
									<a href="javascript:void(0)" class="closebtn gb_menu" onclick="poultry_farm_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','poultry-farm'); ?></span></a>
								</nav>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-6 align-self-center d-flex justify-content-evenly">
							<div class="header-search">
								<div class="search-container">
									<button type="button" class="search-container-button"><span class="dashicons dashicons-search"></span></button>
								</div>
								<div class="external-search">
									<div class="internal-search">
										<?php get_search_form(); ?>
									</div>
									<button type="button" class="closepop search-container-button-close" ><span class="dashicons dashicons-no"></span></button>
								</div>
							</div>
							<?php if( !empty($poultry_farm_quote_button_link)):?>
								<div class="cart-btn">
									<a href="<?php echo esc_url($poultry_farm_quote_button_link);?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bag-shopping.svg" alt=""></a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <?php
	}

endif;

add_action( 'poultry_farm_action_header', 'poultry_farm_site_branding' );


/////////////////////////////////// copyright start /////////////////////////////

if ( ! function_exists( 'poultry_farm_footer_copyright' ) ) :

	/**
	 * Footer copyright
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_footer_copyright() {

		// Check if footer is disabled.
		$poultry_farm_footer_status = apply_filters( 'poultry_farm_filter_footer_status', true );
		if ( true !== $poultry_farm_footer_status ) {
			return;
		}

		// Copyright content.
		$poultry_farm_copyright_text = poultry_farm_get_option( 'poultry_farm_copyright_text' );
		$poultry_farm_copyright_text = apply_filters( 'poultry_farm_filter_copyright_text', $poultry_farm_copyright_text );
		if ( ! empty( $poultry_farm_copyright_text ) ) {
			$poultry_farm_copyright_text = wp_kses_data( $poultry_farm_copyright_text );
		}

		// Powered by content.
		$poultry_farm_powered_by_text = sprintf( __( 'Poultry Farm by %s', 'poultry-farm' ), '<span>' . __( 'Mizan Themes', 'poultry-farm' ) . '</span>' );
		?>

		<div class="colophon-inner">
		    <?php if ( ! empty( $poultry_farm_copyright_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="copyright">
						<?php echo $poultry_farm_copyright_text; ?>
			    	</div><!-- .copyright -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		    <?php if ( ! empty( $poultry_farm_powered_by_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="site-info">
						<a href="<?php echo esc_url('https://www.mizanthemes.com/products/free-ranch-wordpress-theme','poultry-farm'); ?>"><?php echo $poultry_farm_powered_by_text; ?></a>
			    	</div><!-- .site-info -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>
		</div><!-- .colophon-inner -->
		
	    <?php
	}

endif;

add_action( 'poultry_farm_action_footer', 'poultry_farm_footer_copyright', 10 );

// /////////////////////////////////sidebar//////////////////

if ( ! function_exists( 'poultry_farm_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_add_sidebar() {

		global $post;

		$poultry_farm_global_layout = poultry_farm_get_option( 'poultry_farm_global_layout' );
		$poultry_farm_global_layout = apply_filters( 'poultry_farm_filter_theme_global_layout', $poultry_farm_global_layout );

		// Check if single.
		if ( $post && is_singular() ) {
			$poultry_farm_post_options = get_post_meta( $post->ID, 'poultry_farm_theme_settings', true );
			if ( isset( $poultry_farm_post_options['post_layout'] ) && ! empty( $poultry_farm_post_options['poultry_farm_post_layout'] ) ) {
				$poultry_farm_global_layout = $poultry_farm_post_options['poultry_farm_post_layout'];
			}
		}

		// Include primary sidebar.
		if ( 'no-sidebar' !== $poultry_farm_global_layout ) {
			get_sidebar();
		}
		// Include Secondary sidebar.
		switch ( $poultry_farm_global_layout ) {
			case 'three-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

		// Include Secondary sidebar 1.
		switch ( $poultry_farm_global_layout ) {
			case 'four-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

	}

endif;

add_action( 'poultry_farm_action_sidebar', 'poultry_farm_add_sidebar' );

//////////////////////////////////////// single page


if ( ! function_exists( 'poultry_farm_add_image_in_single_display' ) ) :

	/**
	 * Add image in single post.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_add_image_in_single_display() {

		global $post;

		if ( has_post_thumbnail() ) {

			$values = get_post_meta( $post->ID, 'poultry_farm_theme_settings', true );
			$poultry_farm_theme_settings_single_image = isset( $values['poultry_farm_single_image'] ) ? esc_attr( $values['poultry_farm_single_image'] ) : '';

			if ( ! $poultry_farm_theme_settings_single_image ) {
				$poultry_farm_theme_settings_single_image = poultry_farm_get_option( 'poultry_farm_single_image' );
			}

			if ( 'disable' !== $poultry_farm_theme_settings_single_image ) {
				$args = array(
					'class' => 'aligncenter',
				);
				the_post_thumbnail( esc_attr( $poultry_farm_theme_settings_single_image ), $args );
			}
		}

	}

endif;

add_action( 'poultry_farm_single_image', 'poultry_farm_add_image_in_single_display' );

if ( ! function_exists( 'poultry_farm_footer_goto_top' ) ) :

	/**
	 * Go to top.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_footer_goto_top() {
        
        $poultry_farm_show_scroll_to_top = poultry_farm_get_option( 'poultry_farm_show_scroll_to_top' );
        if ( true === $poultry_farm_show_scroll_to_top ) :
		echo '<a id="scrollToTopBtn" href="#page">
				<svg id="progressCircle" width="50" height="50" aria-hidden="true">
					<circle cx="25" cy="25" r="22" stroke-width="4" fill="none"/>
				</svg>
				<i class="fa-solid fa-arrow-up"></i>
				</a>';
		endif;

	}

endif;

add_action( 'poultry_farm_action_after', 'poultry_farm_footer_goto_top', 20 );