<?php
/*
Plugin Name: CIS Credit/Bank Card for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbankcardru_config() {
	return Payssion::getConfig('Russian Credit/Bank Card');
}

function payssionbankcardru_link($params) {
	return Payssion::getLink($params, 'card_ru');
}

function payssionbankcardru_refund($params) {
    return Payssion::refund($params);
}
?>