<?php
/*
 Plugin Name: JazzCash for WHMCS
 Description: JazzCash payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionjazzcashpk_config() {
	return Payssion::getConfig('JazzCash');
}

function payssionjazzcashpk_link($params) {
	return Payssion::getLink($params, 'jazzcash_pk');
}

function payssionjazzcashpk_refund($params) {
	return Payssion::refund($params);
}

?>