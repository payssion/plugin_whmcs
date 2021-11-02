<?php
/*
Plugin Name: Samsung Pay for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionsamsungpaykr_config() {
	return Payssion::getConfig('Samsung Pay');
}

function payssionsamsungpaykr_link($params) {
	return Payssion::getLink($params, 'samsungpay_kr');
}

function payssionsamsungpaykr_refund($params) {
	return Payssion::refund($params);
}
?>