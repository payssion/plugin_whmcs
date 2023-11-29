<?php
/*
 Plugin Name: Apple Pay for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionapplepaysa_config() {
	return Payssion::getConfig('Apple Pay (Saudi Arabia)');
}

function payssionapplepaysa_link($params) {
	return Payssion::getLink($params, 'applepay_sa');
}

function payssionapplepaysa_refund($params) {
    return Payssion::refund($params);
}

?>