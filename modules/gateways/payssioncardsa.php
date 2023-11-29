<?php
/*
 Plugin Name: card_sa for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncardsa_config() {
	return Payssion::getConfig('Saudi Arabia Card');
}

function payssioncardsa_link($params) {
	return Payssion::getLink($params, 'card_sa');
}

function payssioncardsa_refund($params) {
    return Payssion::refund($params);
}

?>