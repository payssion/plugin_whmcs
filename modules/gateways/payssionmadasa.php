<?php
/*
 Plugin Name: MADA for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionmadasa_config() {
	return Payssion::getConfig('Mada');
}

function payssionmadasa_link($params) {
	return Payssion::getLink($params, 'mada_sa');
}

function payssionmadasa_refund($params) {
    return Payssion::refund($params);
}

?>