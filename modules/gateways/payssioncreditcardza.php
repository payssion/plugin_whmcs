<?php
/*
Plugin Name: South Africa Credit Cardd for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncreditcardza_config() {
	return Payssion::getConfig('South Africa Credit Card');
}

function payssioncreditcardza_link($params) {
	return Payssion::getLink($params, 'creditcard_za');
}

function payssioncreditcardza_refund($params) {
	return Payssion::refund($params);
}
?>