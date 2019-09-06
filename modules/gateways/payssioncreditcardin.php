<?php
/*
Plugin Name: India Credit Card for WHMCS
Description: India Credit Card payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncreditcardin_config() {
	return Payssion::getConfig('India Credit Card');
}

function payssioncreditcardin_link($params) {
	return Payssion::getLink($params, 'creditcard_in');
}

function payssioncreditcardin_refund($params) {
	return Payssion::refund($params);
}
?>