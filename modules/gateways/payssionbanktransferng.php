<?php
/*
Plugin Name: Nigeria bank transfer for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbanktransferng_config() {
	return Payssion::getConfig('Nigeria bank transfer');
}

function payssionbanktransferng_link($params) {
	return Payssion::getLink($params, 'banktransfer_ng');
}

function payssionbanktransferng_refund($params) {
    return Payssion::refund($params);
}
?>