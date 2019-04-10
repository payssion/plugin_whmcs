<?php
/*
Plugin Name: Rapi Pago for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionrapipagoar_config() {
	return Payssion::getConfig('Rapi Pago Argentina');
}

function payssionrapipagoar_link($params) {
	return Payssion::getLink($params, 'rapipago_ar');
}
?>