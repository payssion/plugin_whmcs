<?php
/*
Plugin Name: European Bank Transfer for WHMCS
Description: European Bank Transfer payment gateway plugin for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbanktransfereu_config() {
	return Payssion::getConfig('European Bank Transfer');
}

function payssionbanktransfereu_link($params) {
	return Payssion::getLink($params, 'banktransfer_eu');
}
?>