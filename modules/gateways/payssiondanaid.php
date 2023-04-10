<?php
/*
Plugin Name: DANA for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiondanaid_config() {
	return Payssion::getConfig('DANA');
}

function payssiondanaid_link($params) {
	return Payssion::getLink($params, 'dana_id');
}

function payssiondanaid_refund($params) {
	return Payssion::refund($params);
}
?>