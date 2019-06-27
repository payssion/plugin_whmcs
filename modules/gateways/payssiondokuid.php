<?php
/*
Plugin Name: Doku for WHMCS
Description: Doku payment gateway plugin for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiondokuid_config() {
	return Payssion::getConfig('DOKU');
}

function payssiondokuid_link($params) {
	return Payssion::getLink($params, 'doku_id');
}
?>