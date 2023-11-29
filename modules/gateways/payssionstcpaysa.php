<?php
/*
 Plugin Name: stcpay for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionstcpaysa_config() {
	return Payssion::getConfig('stc pay');
}

function payssionstcpaysa_link($params) {
	return Payssion::getLink($params, 'stcpay_sa');
}

function payssionstcpaysa_refund($params) {
    return Payssion::refund($params);
}

?>