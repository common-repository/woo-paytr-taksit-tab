<?php
/*
   Plugin Name: WooCommerce PayTr Taksit Tab
   Plugin URI: https://www.muratbutun.com/woocommerce-paytr-taksit-tabi.html
   Author URI: https://www.muratbutun.com/
   Version: 2.0
   Author: Murat Bütün
   Description: PayTR Ödeme Eklentisi İçin Geliştirilmiş Olan Taksit Tab Eklentisi
   Text Domain: woocommerce-paytr-taksit-tab
   License: GPLv3

  */
$WoocommercePaytrTaksitTab_minimalRequiredPhpVersion = '5.0';

function WoocommercePaytrTaksitTab_noticePhpVersionWrong() {
    global $WoocommercePaytrTaksitTab_minimalRequiredPhpVersion;
    echo '<div class="updated fade">' .
      __('Error: plugin "WooCommerce PayTr Taksit Tab" requires a newer version of PHP to be running.',  'woocommerce-paytr-taksit-tab').
            '<br/>' . __('Minimal version of PHP required: ', 'woocommerce-paytr-taksit-tab') . '<strong>' . $WoocommercePaytrTaksitTab_minimalRequiredPhpVersion . '</strong>' .
            '<br/>' . __('Your server\'s PHP version: ', 'woocommerce-paytr-taksit-tab') . '<strong>' . phpversion() . '</strong>' .
         '</div>';
}


function WoocommercePaytrTaksitTab_PhpVersionCheck() {
    global $WoocommercePaytrTaksitTab_minimalRequiredPhpVersion;
    if (version_compare(phpversion(), $WoocommercePaytrTaksitTab_minimalRequiredPhpVersion) < 0) {
        add_action('admin_notices', 'WoocommercePaytrTaksitTab_noticePhpVersionWrong');
        return false;
    }
    return true;
}

function WoocommercePaytrTaksitTab_i18n_init() {
    $pluginDir = dirname(plugin_basename(__FILE__));
    load_plugin_textdomain('woocommerce-paytr-taksit-tab', false, $pluginDir . '/languages/');
}

add_action('plugins_loadedi','WoocommercePaytrTaksitTab_i18n_init');


if (WoocommercePaytrTaksitTab_PhpVersionCheck()) {

    include_once('woocommerce-paytr-taksit-tab_init.php');
    WoocommercePaytrTaksitTab_init(__FILE__);
}
include("woocommerce/tab.php"); include("woocommerce/woocommerce.php");