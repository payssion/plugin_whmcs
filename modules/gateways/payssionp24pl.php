<?php
/*
Plugin Name: Przelewy24 for WHMCS
Description: Przelewy24 payment gateway plugin for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionp24pl_config() {
	return Payssion::getConfig('Przelewy24');
}

function payssionp24pl_link($params) {
	return Payssion::getLink($params, 'p24_pl');
}

function payssionp24pl_refund($params) {
	return Payssion::refund($params);
}
?>