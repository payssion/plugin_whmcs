<?php
/*
Plugin Name: WebPay for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionwebpaycl_config() {
	return Payssion::getConfig('WebPay Chile');
}

function payssionwebpaycl_link($params) {
	return Payssion::getLink($params, 'webpay_cl');
}
?>