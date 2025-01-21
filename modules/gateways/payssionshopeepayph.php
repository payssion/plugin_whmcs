<?php
/*
Plugin Name: ShopeePay Philippines for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionshopeepayph_config() {
	return Payssion::getConfig('ShopeePay Philippines');
}

function payssionshopeepayph_link($params) {
	return Payssion::getLink($params, 'shopeepay_ph');
}

function payssionshopeepayph_refund($params) {
    return Payssion::refund($params);
}
?>