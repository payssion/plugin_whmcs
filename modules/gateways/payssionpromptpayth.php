<?php
/*
Plugin Name: Promptpay for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpromptpayth_config() {
	return Payssion::getConfig('PromptPay');
}

function payssionpromptpayth_link($params) {
	return Payssion::getLink($params, 'promptpay_th');
}
?>