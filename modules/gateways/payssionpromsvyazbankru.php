<?php
/*
Plugin Name: Promsvyazbank for WHMCS
Description: Promsvyazbank payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpromsvyazbankru_config() {
	return Payssion::getConfig('Promsvyazbank');
}

function payssionpromsvyazbankru_link($params) {
	return Payssion::getLink($params, 'promsvyazbank_ru');
}
?>