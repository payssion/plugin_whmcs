<?php
/*
Plugin Name: PayNow for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpaynowsg_config() {
	return Payssion::getConfig('PayNow');
}
function payssionpaynowsg_link($params) {
	return Payssion::getLink($params, 'paynow_sg');
}
?>