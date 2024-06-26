<?php
/*
 Plugin Name: Konnect for WHMCS
 Description: Konnect payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionkonnectpk_config() {
	return Payssion::getConfig('Konnect');
}

function payssionkonnectpk_link($params) {
	return Payssion::getLink($params, 'konnect_pk');
}

function payssionkonnectpk_refund($params) {
	return Payssion::refund($params);
}

?>