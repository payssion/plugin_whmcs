<?php
/*
 Plugin Name: PayID for WHMCS
 Description: PayID payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpayidau_config() {
	return Payssion::getConfig('PayID');
}

function payssionpayidau_link($params) {
	return Payssion::getLink($params, 'payid_au');
}

function payssionpayidau_refund($params) {
	return Payssion::refund($params);
}

?>