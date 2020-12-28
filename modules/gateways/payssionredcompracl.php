<?php
/*
 Plugin Name: RedCompra for WHMCS
 Description: RedCompra payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionredcompracl_config() {
	return Payssion::getConfig('RedCompra');
}

function payssionredcompracl_link($params) {
	return Payssion::getLink($params, 'redcompra_cl');
}
?>