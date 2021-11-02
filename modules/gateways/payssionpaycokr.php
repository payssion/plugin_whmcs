<?php
/*
Plugin Name: PAYCO for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpaycokr_config() {
	return Payssion::getConfig('PAYCO');
}

function payssionpaycokr_link($params) {
	return Payssion::getLink($params, 'payco_kr');
}

function payssionpaycokr_refund($params) {
	return Payssion::refund($params);
}
?>