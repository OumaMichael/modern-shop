<?php
/**
 * Help Panel.
 *
 */
?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left">
    <div class="panel-aside">
        <h4><?php esc_html_e( 'Theme Customizer', 'poultry-farm' ); ?></h4>
        <p><?php esc_html_e( 'To begin customizing your website, start by clicking "Customize"', 'poultry-farm' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( admin_url('customize.php') ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'poultry-farm' ); ?>" target="_blank">
            <?php esc_html_e( 'Customizing', 'poultry-farm' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Documentation', 'poultry-farm' ); ?></h4>
        <p><?php esc_html_e( 'Explore the comprehensive guide and instructions for this WordPress Theme. Begin your journey with assurance.', 'poultry-farm' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( POULTRY_FARM_DOCUMENTATION ); ?>" title="<?php esc_attr_e( 'Visit the doc', 'poultry-farm' ); ?>" target="_blank">
            <?php esc_html_e( 'Documentation', 'poultry-farm' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Support Ticket', 'poultry-farm' ); ?></h4>
        <p><?php esc_html_e( 'Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme', 'poultry-farm' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( POULTRY_FARM_SUPPORT ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'poultry-farm' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'poultry-farm' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Reviews & Testimonials', 'poultry-farm' ); ?></h4>
        <p><?php esc_html_e( 'All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'poultry-farm' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( POULTRY_FARM_REVIEW ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'poultry-farm' ); ?>" target="_blank">
            <?php esc_html_e( 'Review', 'poultry-farm' ); ?>
        </a>
    </div><!-- .panel-aside -->
</div>