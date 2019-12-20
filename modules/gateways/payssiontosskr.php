<?php
/*
 Plugin Name: South Korea Internet Banking for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiontosskr_config() {
	return Payssion::getConfig('Toss');
}

function payssiontosskr_link($params) {
	return Payssion::getLink($params, 'toss_cn');
}

function payssiontosskr_refund($params) {
	return Payssion::refund($params);
}
?>