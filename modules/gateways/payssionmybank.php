<?php
/*
 Plugin Name: mybank for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionmybank_config() {
	return Payssion::getConfig('MyBank');
}

function payssionmybank_link($params) {
	return Payssion::getLink($params, 'mybank');
}

function payssionmybank_refund($params) {
	return Payssion::refund($params);
}

?>