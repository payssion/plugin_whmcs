<?php
/*
 Plugin Name: card_bh for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncardbh_config() {
	return Payssion::getConfig('Bahrain Card');
}

function payssioncardbh_link($params) {
	return Payssion::getLink($params, 'card_bh');
}

function payssioncardbh_refund($params) {
    return Payssion::refund($params);
}

?>