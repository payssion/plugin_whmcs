<?php
/*
Plugin Name: SSG Pay for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionssgpaykr_config() {
	return Payssion::getConfig('SSG Pay');
}

function payssionssgpaykr_link($params) {
	return Payssion::getLink($params, 'ssgpay_kr');
}

function payssionssgpaykr_refund($params) {
	return Payssion::refund($params);
}
?>