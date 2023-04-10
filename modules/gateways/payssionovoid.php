<?php
/*
Plugin Name: OVO for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionovoid_config() {
	return Payssion::getConfig('OVO');
}

function payssionovoid_link($params) {
	return Payssion::getLink($params, 'ovo_id');
}

function payssionovoid_refund($params) {
	return Payssion::refund($params);
}
?>