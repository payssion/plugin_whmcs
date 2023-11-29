<?php
/*
 Plugin Name: card_qa for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncardqa_config() {
	return Payssion::getConfig('Qatar Card');
}

function payssioncardqa_link($params) {
	return Payssion::getLink($params, 'card_om');
}

function payssioncardqa_refund($params) {
    return Payssion::refund($params);
}

?>