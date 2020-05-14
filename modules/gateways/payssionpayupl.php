<?php
/*
Plugin Name: PayU Poland for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpayupl_config() {
	return Payssion::getConfig('PayU Poland');
}

function payssionpayupl_link($params) {
	return Payssion::getLink($params, 'payu_pl');
}

function payssionpayupl_refund($params) {
	return Payssion::refund($params);
}
?>