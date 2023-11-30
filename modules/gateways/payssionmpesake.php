<?php
/*
 Plugin Name: mpesa_ke for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionmpesake_config() {
	return Payssion::getConfig('M-PESA Kenya');
}

function payssionmpesake_link($params) {
	return Payssion::getLink($params, 'mpesa_ke');
}

function payssionmpesake_refund($params) {
	return Payssion::refund($params);
}

?>