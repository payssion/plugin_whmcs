<?php
/*
Plugin Name: Interbank for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioninterbankpe_config() {
	return Payssion::getConfig('Interbank Peru');
}

function payssioninterbankpe_link($params) {
	return Payssion::getLink($params, 'interbank_pe');
}
?>