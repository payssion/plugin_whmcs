<?php
/*
Plugin Name: usdt for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionusdt_config() {
	basename(__FILE__, '.php');
	return Payssion::getConfig('USDT');
}

function payssionusdt_link($params) {
	return Payssion::getLink($params, 'usdt');
}

function payssionusdt_refund($params) {
    return Payssion::refund($params);
}
?>