<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package poultry_farm
 */

get_header(); ?>

<?php $poultry_farm_404_page_title = poultry_farm_get_option( 'poultry_farm_404_page_title' ); ?>
<?php $poultry_farm_404_page_text = poultry_farm_get_option( 'poultry_farm_404_page_text' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html($poultry_farm_404_page_title);?></h1>
				</header>
				<div class="page-content">
					<p ><?php echo esc_html($poultry_farm_404_page_text);?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</main>
	</div>

<?php get_footer(); ?>