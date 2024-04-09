<?php
/*
Plugin Name: Nigeria Credit/Debit Card for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbankcardng_config() {
	return Payssion::getConfig('Nigeria Credit/Debit Card');
}

function payssionbankcardng_link($params) {
	return Payssion::getLink($params, 'bankcard_ng');
}

function payssionbankcardng_refund($params) {
    return Payssion::refund($params);
}
?>