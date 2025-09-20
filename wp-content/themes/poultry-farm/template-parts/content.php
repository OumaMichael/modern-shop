<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package poultry_farm
 */

?>
<div class="blog-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php $poultry_farm_archive_layout = poultry_farm_get_option( 'poultry_farm_archive_layout' );
		$poultry_farm_show_post_image = poultry_farm_get_option( 'poultry_farm_show_post_featured_image_setting' );
		if ( true === $poultry_farm_show_post_image ) { ?>
			<div class="blog-img">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php
					$poultry_farm_archive_image           = poultry_farm_get_option( 'poultry_farm_archive_image' );
					$poultry_farm_archive_image_alignment = poultry_farm_get_option( 'poultry_farm_archive_image_alignment' );
					?>
					<?php if ( 'disable' !== $poultry_farm_archive_image ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( esc_attr( $poultry_farm_archive_image ), array( 'class' => 'align'. esc_attr( $poultry_farm_archive_image_alignment ) ) ); ?></a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		<?php }?>
		<div class="entry-content-wrapper">
			<?php poultry_farm_entry_meta_date(); ?>
			<?php $poultry_farm_show_post_heading = poultry_farm_get_option( 'poultry_farm_show_post_heading_setting' );
			if ( true === $poultry_farm_show_post_heading ) { ?>
				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</header>
			<?php } ?>
			<footer class="entry-footer">
				<?php poultry_farm_entry_footer(); ?>
			</footer>
		</div>
		<?php $poultry_farm_show_post_content = poultry_farm_get_option( 'poultry_farm_show_post_content_setting' );
		if ( true === $poultry_farm_show_post_content ) { ?>
			<div class="text-content">
				<?php if ( 'full' === $poultry_farm_archive_layout ) : ?>
					<?php
					the_content( sprintf(
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'poultry-farm' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'poultry-farm' ),
							'after'  => '</div>',
						) );
					?>
			    <?php else : ?>
					<?php the_excerpt(); ?>
			    <?php endif; ?>
			</div>
		<?php } ?>
	</article>
</div>

