<?php
/*
 Plugin Name: GrabPay Philippines for WHMCS
 Description: GrabPay Philippines payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiongrabpayph_config() {
    return Payssion::getConfig('GrabPay Philippines');
}

function payssiongrabpayph_link($params) {
    return Payssion::getLink($params, 'grabpay_ph');
}

?>