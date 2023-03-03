<?php
/*
Plugin Name: Alipay HK for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionalipayhk_config() {
	return Payssion::getConfig('Alipay HK');
}

function payssionalipayhk_link($params) {
	return Payssion::getLink($params, 'alipay_hk');
}

function payssionalipayhk_refund($params) {
	return Payssion::refund($params);
}

?>