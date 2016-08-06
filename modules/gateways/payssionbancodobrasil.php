<?php
/*
Plugin Name: bancodobrasil for WHMCS
Description: bancodobrasil payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
Release date: 11/16/2015
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionbancodobrasil_config() {
	return Payssion::getConfig('Banco do Brasil');
}

function payssionbancodobrasil_link($params) {
	return Payssion::getLink($params, 'bancodobrasil_br');
}
?>