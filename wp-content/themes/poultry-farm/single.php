<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package poultry_farm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'poultry-farm' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'poultry-farm' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'poultry-farm' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'poultry-farm' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
			?>
			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			<?php
			$poultry_farm_enable_related_post = poultry_farm_get_option('poultry_farm_enable_related_post');
			if ($poultry_farm_enable_related_post) :
			 get_template_part('template-parts/related-posts');
			endif; ?>
		<?php endwhile; // End of the loop. ?>

		</main>
	</div>

<?php
	do_action( 'poultry_farm_action_sidebar' );
?>
<?php get_footer(); ?>
