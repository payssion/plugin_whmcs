<?php
/*
Plugin Name: Bancontact for WHMCS
Description: Bancontact payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
Release date: 11/16/2015
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbancontactbe_config() {
	return Payssion::getConfig('Bancontact');
}
function payssionbancontactbe_link($params) {
	return Payssion::getLink($params, 'bancontact_be');
}
?>