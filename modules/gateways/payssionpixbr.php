<?php
/*
 Plugin Name: pix for WHMCS
 Description: PIX payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpixbr_config() {
	return Payssion::getConfig('PIX');
}

function payssionpixbr_link($params) {
	return Payssion::getLink($params, 'pix_br');
}

function payssionpixbr_refund($params) {
	return Payssion::refund($params);
}

?>