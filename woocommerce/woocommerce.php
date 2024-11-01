<?php
function mrtbtn_paytr_plugin_path() {
return untrailingslashit( plugin_dir_path( __FILE__ ) );
 
}
 
 
add_filter( 'woocommerce_locate_template', 'mrtbtn_paytr_woocommerce_locate_template', 10, 3 );
 
 
function mrtbtn_paytr_woocommerce_locate_template( $template, $template_name, $template_path ) {
 
  global $woocommerce;
 
  $_template = $template;
 
  if ( ! $template_path ) $template_path = $woocommerce->template_url;
 
  $plugin_path  = mrtbtn_paytr_plugin_path() . '/woocommerce/';

  $template = locate_template(
 
    array(
 
      $template_path . $template_name,
 
      $template_name
 
    )
 
  );

  if ( ! $template && file_exists( $plugin_path . $template_name ) )
 
    $template = $plugin_path . $template_name;

  if ( ! $template )
 
    $template = $_template;

  return $template;
 
}
?>