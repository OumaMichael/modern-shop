<?php
/**
 * Plugin Panel.
 *
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left">
    <div id="Mizan_Demo_Importor_editor" class="tabcontent">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Poultry_Farm_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $poultry_farm_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="poultry-farm-recommended-plugins ">
                    <div class="poultry-farm-action-list">
                        <?php if ($poultry_farm_actions): foreach ($poultry_farm_actions as $key => $poultry_farm_actionValue): ?>
                                <div class="poultry-farm-action" id="<?php echo esc_attr($poultry_farm_actionValue['id']);?>">
                                    <div class="action-inner plugin-activation-redirect">
                                        <h4 class="action-title"><?php echo esc_html($poultry_farm_actionValue['title']); ?></h4>
                                        <div class="action-desc"><?php echo esc_html($poultry_farm_actionValue['desc']); ?></div>
                                        <?php echo wp_kses_post($poultry_farm_actionValue['link']); ?>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
            </div>
        <?php }else{ ?>
            <div class="tab-outer-box">
                <h2><?php esc_html_e( 'Welcome to Mizan Theme!', 'poultry-farm' ); ?></h2>
                <p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'poultry-farm' ); ?></p>
                <p><?php esc_html_e( '1. Install Mizan Demo Importor', 'poultry-farm' ); ?></p>
                <p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'poultry-farm' ); ?></p>
                <p><?php esc_html_e( '2. Activate Mizan Demo Importor ', 'poultry-farm' ); ?></p>
                <p><?php esc_html_e( '>> Click on the start now button', 'poultry-farm' ); ?></p>
                <p><?php esc_html_e( '>> Click install plugins', 'poultry-farm' ); ?></p>
                <p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'poultry-farm' ); ?></p>
            </div>
        <?php } ?>
    </div>
</div><!-- .panel-left -->