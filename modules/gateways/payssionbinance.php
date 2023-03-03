<?php
/*
Plugin Name: binance for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbinance_config() {
	basename(__FILE__, '.php');
	return Payssion::getConfig('Binance');
}

function payssionbinance_link($params) {
	return Payssion::getLink($params, 'binance');
}

function payssionbinance_refund($params) {
    return Payssion::refund($params);
}
?>