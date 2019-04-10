<?php
/*
Plugin Name: Red Pagos for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionredpagosuy_config() {
	return Payssion::getConfig('Red Pagos Uruguay');
}

function payssionredpagosuy_link($params) {
	return Payssion::getLink($params, 'redpagos_uy');
}
?>