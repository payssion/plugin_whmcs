<?php
/*
Plugin Name: LinkAja for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionlinkajaid_config() {
	return Payssion::getConfig('LinkAja');
}

function payssionlinkajaid_link($params) {
	return Payssion::getLink($params, 'linkaja_id');
}

function payssionlinkajaid_refund($params) {
	return Payssion::refund($params);
}
?>