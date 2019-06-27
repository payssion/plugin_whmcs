<?php
/*
Plugin Name: Multibanco for WHMCS
Description: Multibanco payment gateway plugin for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionmultibancopt_config() {
	return Payssion::getConfig('Multibanco');
}

function payssionmultibancopt_link($params) {
	return Payssion::getLink($params, 'multibanco_pt');
}

function payssionmultibancopt_refund($params) {
	return Payssion::refund($params);
}
?>