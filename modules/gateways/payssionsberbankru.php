<?php
/*
 Plugin Name: SberPay for WHMCS
 Description: SberPay payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionsberbankru_config() {
	return Payssion::getConfig('SberPay');
}

function payssionsberbankru_link($params) {
	return Payssion::getLink($params, 'sberpay_ru');
}

function payssionsberbankru_refund($params) {
    return Payssion::refund($params);
}
?>