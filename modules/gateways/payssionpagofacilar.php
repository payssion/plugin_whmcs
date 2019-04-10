<?php
/*
Plugin Name: Pago Fácil	 for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpagofacilar_config() {
	return Payssion::getConfig('Pago Fácil Argentina');
}

function payssionpagofacilar_link($params) {
	return Payssion::getLink($params, 'pagofacil_ar');
}
?>