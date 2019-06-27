<?php
/*
Plugin Name: Mexico Credit Card for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncreditcardmx_config() {
	return Payssion::getConfig('Mexico Credit Card');
}

function payssioncreditcardmx_link($params) {
	return Payssion::getLink($params, 'creditcard_mx');
}

function payssioncreditcardmx_refund($params) {
	return Payssion::refund($params);
}
?>