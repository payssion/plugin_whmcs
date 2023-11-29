<?php
/*
 Plugin Name: card_kw for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncardkw_config() {
	return Payssion::getConfig('Kuwait Card');
}

function payssioncardkw_link($params) {
	return Payssion::getLink($params, 'card_kw');
}

function payssioncardkw_refund($params) {
    return Payssion::refund($params);
}

?>