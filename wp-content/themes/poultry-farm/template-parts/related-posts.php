<?php
/**
 * Related posts based on categories and tags.
 * 
 */

$poultry_farm_archive_layout = poultry_farm_get_option( 'poultry_farm_archive_layout' ); 
$poultry_farm_related_posts_taxonomy = poultry_farm_get_option( 'poultry_farm_related_posts_taxonomy', 'category' );

$poultry_farm_post_args = array(
    'posts_per_page'    => 3,
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$poultry_farm_tax_terms = wp_get_post_terms( get_the_ID(), 'category' );
$poultry_farm_terms_ids = array();
foreach( $poultry_farm_tax_terms as $tax_term ) {
	$poultry_farm_terms_ids[] = $tax_term->term_id;
}

$poultry_farm_post_args['category__in'] = $poultry_farm_terms_ids;

$poultry_farm_related_posts = new WP_Query( $poultry_farm_post_args );

if ( $poultry_farm_related_posts->have_posts() ) : ?>
    <div class="related-post">
        <h3><?php echo esc_html__('Related Post' ,'poultry-farm' );?></h3>
        <div class="row">
            <?php while ( $poultry_farm_related_posts->have_posts() ) : $poultry_farm_related_posts->the_post(); ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php $poultry_farm_enable_related_post_image = poultry_farm_get_option('poultry_farm_enable_related_post_image');
                      if ($poultry_farm_enable_related_post_image) { ?>
                      <div class="blog-img mb-2">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <?php endif; ?>
                      </div>
                    <?php } ?>
                    <div class="entry-content-wrapper">
                      <?php poultry_farm_entry_meta_date(); ?>
                        <header class="entry-header">
                          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header>
                    </div>
                    <div class="text-content">
                      <?php if ( 'full' === $poultry_farm_archive_layout ) : ?>
                        <?php
                        the_content( sprintf(
                          wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'poultry-farm' ), array( 'span' => array( 'class' => array() ) ) ),
                          the_title( '<span class="screen-reader-text">"', '"</span>', false )
                        ) );
                        ?>
                        <?php else : ?>
                        <?php the_excerpt(); ?>
                        <?php endif; ?>
                    </div>
                  </article>
              </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();