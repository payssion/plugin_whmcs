<?php
/*
 Plugin Name: Baloto for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbalotoco_config() {
	return Payssion::getConfig('Baloto Colombia');
}

function payssionbalotoco_link($params) {
	return Payssion::getLink($params, 'baloto_co');
}
?>