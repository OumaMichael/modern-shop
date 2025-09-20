<?php
$theme = wp_get_theme();

$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_poultry-farm-getting-started' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-success is-dismissible poultry-farm-admin-notice">
	<div class="poultry-farm-admin-notice-wrapper">
		<h2 style="font-size:25px;" ><?php esc_html_e( 'Thank you for selecting ', 'poultry-farm' ); ?> <?php echo $theme->get( 'Name' ); ?> <?php esc_html_e( 'Theme!', 'poultry-farm' ); ?></h2>
		<p style="font-size:14px; margin:20px 0px;"><?php esc_html_e( 'Explore the benefits of our simple Demo Importer and automatic Plugin Installation. Click the button below to begin.', 'poultry-farm' ); ?></p>
		<span class="admin-2-btn" >
			<a class="button-secondary" style="margin-bottom: 15px; margin-right: 10px; padding: 3px 15px;" href="<?php echo esc_url( admin_url( 'themes.php?page=poultry-farm-getting-started' ) ); ?>"><?php esc_html_e( 'Import Theme Demo', 'poultry-farm' ); ?></a>
	        <a class="button-primary" style="margin-bottom: 15px; padding: 3px 15px;" href="<?php echo esc_url('https://www.mizanthemes.com/products/poultry-farm-wordpress-theme'); ?>" target="_blank"><?php esc_html_e('Get Poultry Farm Pro', 'poultry-farm'); ?></a>
        </span>
	</div>
</div>