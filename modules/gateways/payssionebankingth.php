<?php
/*
Plugin Name: Thailand online banking for WHMCS
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionebankingth_config() {
	return Payssion::getConfig('Thailand online banking');
}

function payssionebankingth_link($params) {
	return Payssion::getLink($params, 'ebanking_th');
}
?>