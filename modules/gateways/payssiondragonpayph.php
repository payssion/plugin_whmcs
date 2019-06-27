<?php
/*
Plugin Name: Dragonpay for WHMCS
Description: Dragonpay payment gateway plugin for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiondragonpayph_config() {
	return Payssion::getConfig('Dragonpay');
}

function payssiondragonpayph_link($params) {
	return Payssion::getLink($params, 'dragonpay_ph');
}
?>