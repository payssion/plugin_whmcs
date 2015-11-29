<?php
/*
Plugin Name: qiwi for WHMCS
Description: qiwi payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
Release date: 11/16/2015
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssion_qiwi_config() {
	basename(__FILE__, '.php');
	return Payssion::getConfig('QIWI');
}

function payssion_qiwi_link($params) {
	return Payssion::getConfig($params, 'qiwi');
}
?>