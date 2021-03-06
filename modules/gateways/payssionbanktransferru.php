<?php
/*
Plugin Name: Russia Bank Transfer for WHMCS
Description: Russia Bank Transfer payment gateway plugin for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbanktransferru_config() {
	return Payssion::getConfig('Russia Bank Transfer');
}

function payssionbanktransferru_link($params) {
	return Payssion::getLink($params, 'banktransfer_ru');
}
?>