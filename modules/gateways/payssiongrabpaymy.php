<?php
/*
 Plugin Name: GrabPay Malaysia for WHMCS
 Description: GrabPay Malaysia payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiongrabpaymy_config() {
    return Payssion::getConfig('GrabPay Malaysia');
}

function payssiongrabpaymy_link($params) {
    return Payssion::getLink($params, 'grabpay_my');
}

?>