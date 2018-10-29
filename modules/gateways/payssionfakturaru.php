<?php
/*
Plugin Name: Faktura for WHMCS
Description: Faktura payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionfakturaru_config() {
	return Payssion::getConfig('Faktura');
}

function payssionfakturaru_link($params) {
	return Payssion::getLink($params, 'faktura_ru');
}
?>