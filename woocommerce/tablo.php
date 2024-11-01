<?php $baslik = get_option('WoocommercePaytrTaksitTab_Plugin_baslik');?>
<?php $token = get_option('WoocommercePaytrTaksitTab_Plugin_token');?>
<?php $merchant = get_option('WoocommercePaytrTaksitTab_Plugin_merchantid');?>
<?php $product = new WC_Product( get_the_ID() ); $price = $product->price; ?>
<style>
    #paytr_taksit_tablosu{clear: both;font-size: 12px;max-width: 1200px;text-align: center;font-family: Arial, sans-serif;}
    #paytr_taksit_tablosu::before {display: table;content: " ";}
    #paytr_taksit_tablosu::after {content: "";clear: both;display: table;}
    .taksit-tablosu-wrapper{margin: 5px;width: 280px;padding: 12px;cursor: default;text-align: center;display: inline-block;border: 1px solid #e1e1e1;}
    .taksit-logo img{max-height: 28px;padding-bottom: 10px;}
    .taksit-tutari-text{float: left;width: 126px;color: #a2a2a2;margin-bottom: 5px;}
    .taksit-tutar-wrapper{display: inline-block;background-color: #f7f7f7;}
    .taksit-tutar-wrapper:hover{background-color: #e8e8e8;}
    .taksit-tutari{float: left;width: 126px;padding: 6px 0;color: #474747;border: 2px solid #ffffff;}
    .taksit-tutari-bold{font-weight: bold;}
    @media all and (max-width: 600px) {.taksit-tablosu-wrapper {margin: 5px 0;}}
</style>
<div id="paytr_taksit_tablosu"></div>
<script src="https://www.paytr.com/odeme/taksit-tablosu/v2?token=<?php echo $token; ?>&merchant_id=<?php echo $merchant; ?>&amount=<?php echo $price; ?>&taksit=0&tumu=0"></script>