<?php $baslik = get_option('WoocommercePaytrTaksitTab_Plugin_baslik');?>
<?php
// Taksit Ekranını Ürün Sayfasında Göster Başlangıç
add_filter('woocommerce_product_tabs', 'woo_taksit_tab');
function woo_taksit_tab($tabs)
				{
				$tabs['woo-taksit-paytr'] = array(
								'title' => 'Taksit Tablosu',
								'priority' => 50,
								'callback' => 'woo_taksit_tab_content'
				);
				return $tabs;
				}

function woo_taksit_tab_content()
				{
				echo get_option('WoocommercePaytrTaksitTab_Plugin_baslik');
				include 'tablo.php';

				}
// Taksit Ekranını Ürün Sayfasında Göster Bitiş
?>
