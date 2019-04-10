<?php
/*
Plugin Name: BCP for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbcppe_config() {
	return Payssion::getConfig('BCP Peru');
}

function payssionbcppe_link($params) {
	return Payssion::getLink($params, 'bcp_pe');
}
?>