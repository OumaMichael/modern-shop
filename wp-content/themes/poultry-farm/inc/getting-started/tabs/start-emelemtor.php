<?php
/**
 * Start Elementor.
 *
 */
?>
<!-- Start Elementor -->
<div id="start-panel" class="panel-left visible">
    <div id="poultry-farm-importer" class="tabcontent open">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Poultry_Farm_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $poultry_farm_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="poultry-farm-recommended-plugins ">
                <div class="poultry-farm-action-list">
                    <?php if ($poultry_farm_actions): foreach ($poultry_farm_actions as $key => $poultry_farm_actionValue): ?>
                            <div class="poultry-farm-action" id="<?php echo esc_attr($poultry_farm_actionValue['id']);?>">
                                <div class="action-inner plugin-activation-redirect">
                                    <h3 class="action-title"><?php echo esc_html($poultry_farm_actionValue['title']); ?></h3>
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
                <h3><?php esc_html_e('Welcome to Mizan Themes', 'poultry-farm'); ?></h3>
                <p class="start-text"><?php esc_html_e('The demo will import after you click the Start Quickly button.', 'poultry-farm'); ?></p>
                <div class="info-link">
                    <a class="button button-primary" href="<?php echo esc_url( admin_url('admin.php?page=mizandemoimporter-wizard') ); ?>"><?php esc_html_e('Start Quickly', 'poultry-farm'); ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
