<?php
/*
Plugin Name: moneta for WHMCS
Description: moneta payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionmonetaru_config() {
	return Payssion::getConfig('Moneta');
}

function payssionmonetaru_link($params) {
	return Payssion::getLink($params, 'moneta_ru');
}
?>