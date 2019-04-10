<?php
/*
Plugin Name: Efecty for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionefectyco_config() {
	return Payssion::getConfig('Efecty Colombia');
}

function payssionefectyco_link($params) {
	return Payssion::getLink($params, 'efecty_co');
}
?>