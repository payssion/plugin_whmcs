<?php
/*
 Plugin Name: QRIS for WHMCS
 Description: QRIS payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionqrisid_config() {
    return Payssion::getConfig('QRIS');
}

function payssionqrisid_link($params) {
    return Payssion::getLink($params, 'qris_id');
}

function payssionqrisid_refund($params) {
    return Payssion::refund($params);
}

?>