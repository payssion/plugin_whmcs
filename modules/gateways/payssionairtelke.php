<?php
/*
 Plugin Name: Airtel Kenya for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionairtelke_config() {
    return Payssion::getConfig('Airtel Kenya');
}

function payssionairtelke_link($params) {
    return Payssion::getLink($params, 'airtel_ke');
}

function payssionairtelke_refund($params) {
    return Payssion::refund($params);
}

?>