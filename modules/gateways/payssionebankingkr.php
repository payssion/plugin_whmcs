<?php
/*
Plugin Name: South Korea Internet Banking for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionebankingkr_config() {
	return Payssion::getConfig('South Korea Internet Banking');
}

function payssionebankingkr_link($params) {
	return Payssion::getLink($params, 'ebanking_kr');
}

function payssionebankingkr_refund($params) {
	return Payssion::refund($params);
}
?>