<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package poultry_farm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="single-post-footer">
		<?php
		  do_action( 'poultry_farm_single_image' );
		?>
	</div>
	<footer class="entry-footer">
		<?php poultry_farm_entry_footer(); ?>
	</footer>
	<div class="entry-content-wrapper">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'poultry-farm' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</article>
