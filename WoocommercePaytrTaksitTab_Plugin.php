<?php

include_once('WoocommercePaytrTaksitTab_LifeCycle.php');

class WoocommercePaytrTaksitTab_Plugin extends WoocommercePaytrTaksitTab_LifeCycle {

    public function getOptionMetaData() {
        return array(
            'baslik' => array(__('Tab Başlığı', 'woocommerce-paytr-taksit-tab')),
            'token' => array(__('Token', 'woocommerce-paytr-taksit-tab')),
            'merchantid' => array(__('Merchant ID', 'woocommerce-paytr-taksit-tab')),
        );
    }


    protected function initOptions() {
        $options = $this->getOptionMetaData();
        if (!empty($options)) {
            foreach ($options as $key => $arr) {
                if (is_array($arr) && count($arr > 1)) {
                    $this->addOption($key, $arr[1]);
                }
            }
        }
    }

    public function getPluginDisplayName() {
        return 'PayTr Taksit Tab';
    }

    protected function getMainPluginFileName() {
        return 'woocommerce-paytr-taksit-tab.php';
    }

    protected function installDatabaseTables() {

    }

    protected function unInstallDatabaseTables() {
    }

    public function upgrade() {
    }

    public function addActionsAndFilters() {

        add_action('admin_menu', array(&$this, 'addSettingsSubMenuPage'));

        wp_enqueue_style('my-style', plugins_url('/css/paytr-tab.css', __FILE__));

    }


}