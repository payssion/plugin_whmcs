<?php
/*
 Plugin Name: card_om for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncardom_config() {
	return Payssion::getConfig('Oman Card');
}

function payssioncardom_link($params) {
	return Payssion::getLink($params, 'card_om');
}

function payssioncardom_refund($params) {
    return Payssion::refund($params);
}

?>