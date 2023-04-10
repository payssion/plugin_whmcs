<?php
/*
Plugin Name: ShopeePay for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionshopeepayid_config() {
	return Payssion::getConfig('ShopeePay');
}

function payssionshopeepayid_link($params) {
	return Payssion::getLink($params, 'shopeepay_id');
}

function payssionshopeepayid_refund($params) {
	return Payssion::refund($params);
}
?>