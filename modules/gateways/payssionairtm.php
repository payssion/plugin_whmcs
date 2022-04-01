<?php
/*
Plugin Name: Airtm for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionairtm_config() {
	return Payssion::getConfig('Airtm');
}

function payssionairtm_link($params) {
	return Payssion::getLink($params, 'airtm');
}

function payssionairtm_refund($params) {
	return Payssion::refund($params);
}
?>