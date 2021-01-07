<?php
/*
 Plugin Name: Trustly for WHMCS
 Description: Trustly payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiontrustly_config() {
    return Payssion::getConfig('Trustly');
}

function payssiontrustly_link($params) {
    return Payssion::getLink($params, 'trustly');
}

function payssiontrustly_refund($params) {
    return Payssion::refund($params);
}

?>