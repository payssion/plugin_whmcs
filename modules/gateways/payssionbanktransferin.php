<?php
/*
 Plugin Name: Indian Bank Transfer for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbanktransferin_config() {
	return Payssion::getConfig('Indian Bank Transfer');
}

function payssionbanktransferin_link($params) {
	return Payssion::getLink($params, 'banktransfer_in');
}

function payssionbanktransferin_refund($params) {
	return Payssion::refund($params);
}
?>