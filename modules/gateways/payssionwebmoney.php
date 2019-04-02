<?php
/*
Plugin Name: webmoney for WHMCS
Description: webmoney payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
Release date: 11/16/2015
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionwebmoney_config() {
	return Payssion::getConfig('WebMoney');
}

function payssionwebmoney_link($params) {
	return Payssion::getLink($params, 'webmoney');
}

function payssionwebmoney_refund($params) {
	return Payssion::refund($params);
}
?>