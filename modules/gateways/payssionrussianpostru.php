<?php
/*
Plugin Name: Russian Post centres for WHMCS
Description: Russian Post centres payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionrussianpostru_config() {
	return Payssion::getConfig('Russian Post centres');
}

function payssionrussianpostru_link($params) {
	return Payssion::getLink($params, 'russianpost_ru');
}
?>