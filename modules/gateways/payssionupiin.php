<?php
/*
Plugin Name: India UPI for WHMCS
Description: India UPI payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionupiin_config() {
	return Payssion::getConfig('India UPI');
}

function payssionupiin_link($params) {
	return Payssion::getLink($params, 'upi_in');
}

function payssionupiin_refund($params) {
	return Payssion::refund($params);
}
?>