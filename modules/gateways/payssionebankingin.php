<?php
/*
Plugin Name: India Netbanking for WHMCS
Description: India Netbanking payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionebankingin_config() {
	return Payssion::getConfig('India Netbanking');
}

function payssionebankingin_link($params) {
	return Payssion::getLink($params, 'ebanking_in');
}

function payssionebankingin_refund($params) {
	return Payssion::refund($params);
}
?>