<?php
/*
 Plugin Name: Pay by Bank app for WHMCS
 Description: Pay by Bank app payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpaybybankappgb_config() {
    return Payssion::getConfig('Pay by UK Bank app');
}

function payssionpaybybankappgb_link($params) {
    return Payssion::getLink($params, 'paybybankapp_gb');
}

function payssionpaybybankappgb_refund($params) {
    return Payssion::refund($params);
}

?>