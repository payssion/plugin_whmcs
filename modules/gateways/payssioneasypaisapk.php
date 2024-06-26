<?php
/*
 Plugin Name: Easypaisa for WHMCS
 Description: Easypaisa payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioneasypaisapk_config() {
	return Payssion::getConfig('Easypaisa');
}

function payssioneasypaisapk_link($params) {
	return Payssion::getLink($params, 'easypaisa_pk');
}

function payssioneasypaisapk_refund($params) {
	return Payssion::refund($params);
}

?>