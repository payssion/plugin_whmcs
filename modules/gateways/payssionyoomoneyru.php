<?php
/*
 Plugin Name: YooMoney for WHMCS
 Description: YooMoney payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionyoomoneyru_config() {
	return Payssion::getConfig('YooMoney');
}

function payssionyoomoneyru_link($params) {
	return Payssion::getLink($params, 'yoomoney_ru');
}

function payssionyoomoneyru_refund($params) {
	return Payssion::refund($params);
}
?>