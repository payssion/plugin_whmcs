<?php
/*
Plugin Name: oxxo for WHMCS
Description: oxxo payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
Release date: 11/16/2015
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssion_oxxo_mx_config() {
	basename(__FILE__, '.php');
	return Payssion::getConfig('Oxxo');
}

function payssion_oxxo_mx_link($params) {
	return Payssion::getConfig($params, 'oxxo_mx');
}
?>