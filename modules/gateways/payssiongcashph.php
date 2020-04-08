<?php
/*
Plugin Name: GCash for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiongcashph_config() {
	return Payssion::getConfig('Globe Gcash	Philippines');
}

function payssiongcashph_link($params) {
	return Payssion::getLink($params, 'gcash_ph');
}
?>