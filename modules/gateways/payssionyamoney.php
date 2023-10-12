<?php
/*
 Plugin Name: YooMoney for WHMCS
 Description: YooMoney payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionyamoney_config() {
	return Payssion::getConfig('YooMoney');
}

function payssionyamoney_link($params) {
	return Payssion::getLink($params, 'yoomoney_ru');
}

function payssionyamoney_refund($params) {
	return Payssion::refund($params);
}
?>