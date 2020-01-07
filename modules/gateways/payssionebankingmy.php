<?php
/*
Plugin Name: Malaysia e-banking for WHMCS
Description: Malaysia e-banking payment gateway plugin for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionebankingmy_config() {
	return Payssion::getConfig('Malaysia e-banking');
}

function payssionebankingmy_link($params) {
	return Payssion::getLink($params, 'ebanking_my');
}

?>