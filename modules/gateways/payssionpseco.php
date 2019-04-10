<?php
/*
Plugin Name: PSE for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpseco_config() {
	return Payssion::getConfig('PSE Colombia');
}

function payssionpseco_link($params) {
	return Payssion::getLink($params, 'pse_co');
}
?>