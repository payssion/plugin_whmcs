<?php
/*
Plugin Name: PayU Czech for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpayucz_config() {
	return Payssion::getConfig('PayU Czech');
}

function payssionpayucz_link($params) {
	return Payssion::getLink($params, 'payu_cz');
}

function payssionpayucz_refund($params) {
	return Payssion::refund($params);
}
?>