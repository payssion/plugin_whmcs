<?php
/*
Plugin Name: Turkish Credit/Bank Card for WHMCS
Description: Turkish Credit/Bank Card payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbankcardtr_config() {
	return Payssion::getConfig('Turkish Credit/Bank Card');
}

function payssionbankcardtr_link($params) {
	return Payssion::getLink($params, 'bankcard_tr');
}
?>