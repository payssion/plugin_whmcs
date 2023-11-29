<?php
/*
 Plugin Name: card_ae for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncardae_config() {
	return Payssion::getConfig('UAE Card');
}

function payssioncardae_link($params) {
	return Payssion::getLink($params, 'card_ae');
}

function payssioncardae_refund($params) {
    return Payssion::refund($params);
}

?>