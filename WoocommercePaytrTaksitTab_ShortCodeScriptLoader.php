<?php
include_once('WoocommercePaytrTaksitTab_ShortCodeLoader.php');

abstract class WoocommercePaytrTaksitTab_ShortCodeScriptLoader extends WoocommercePaytrTaksitTab_ShortCodeLoader {

    var $doAddScript;

    public function register($shortcodeName) {
        $this->registerShortcodeToFunction($shortcodeName, 'handleShortcodeWrapper');

        add_action('wp_footer', array($this, 'addScriptWrapper'));
    }

    public function handleShortcodeWrapper($atts) {

        $this->doAddScript = true;
        return $this->handleShortcode($atts);
    }


    public function addScriptWrapper() {

        if ($this->doAddScript) {
            $this->addScript();
        }
    }

    public abstract function addScript();

}