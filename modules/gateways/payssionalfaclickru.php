<?php
/*
Plugin Name: Alfa-Click for WHMCS
Description: Alfa-Click payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: Payssion
Author URI: https://www.payssion.com
*/

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionalfaclickru_config() {
	return Payssion::getConfig('Alfa-Click');
}

function payssionalfaclickru_link($params) {
	return Payssion::getLink($params, 'alfaclick_ru');
}
?>