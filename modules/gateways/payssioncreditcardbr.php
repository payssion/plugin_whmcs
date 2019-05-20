<?php
/*
Plugin Name: Brazil Credit Card for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncreditcardbr_config() {
	return Payssion::getConfig('Brazil Credit Card');
}

function payssioncreditcardbr_link($params) {
	return Payssion::getLink($params, 'creditcard_br');
}

function payssioncreditcardbr_refund($params) {
	return Payssion::refund($params);
}
?>