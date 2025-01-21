<?php
/*
Plugin Name: Maya for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpaymayaph_config() {
	return Payssion::getConfig('Maya Philippines');
}

function payssionpaymayaph_link($params) {
	return Payssion::getLink($params, 'paymaya_ph');
}

function payssionpaymayaph_refund($params) {
    return Payssion::refund($params);
}
?>