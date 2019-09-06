<?php
/*
Plugin Name: South Korea Credit Card for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncreditcardkr_config() {
	return Payssion::getConfig('South Korea Credit Card');
}

function payssioncreditcardkr_link($params) {
	return Payssion::getLink($params, 'creditcard_kr');
}

function payssioncreditcardkr_refund($params) {
	return Payssion::refund($params);
}
?>