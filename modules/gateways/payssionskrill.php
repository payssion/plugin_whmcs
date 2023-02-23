<?php
/*
 Plugin Name: Skrill for WHMCS
 Description: Skrill payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionskrill_config() {
    return Payssion::getConfig('Skrill');
}

function payssionskrill_link($params) {
    return Payssion::getLink($params, 'skrill');
}

function payssionskrill_refund($params) {
    return Payssion::refund($params);
}

?>