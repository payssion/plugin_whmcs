<?php
/*
 Plugin Name: Paysafecash for WHMCS
 Description: Paysafecash payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */


require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpaysafecash_config() {
	return Payssion::getConfig('paysafecash');
}

function payssionpaysafecash_link($params) {
	return Payssion::getLink($params, 'paysafecash');
}
?>