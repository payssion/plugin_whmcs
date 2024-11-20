<?php
/*
 Plugin Name: Touch 'N Go for WHMCS
 Description: Touch 'N Go payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssiontouchngomy_config() {
    return Payssion::getConfig("Touch 'N Go");
}

function payssiontouchngomy_link($params) {
    return Payssion::getLink($params, 'touchngo_my');
}

function payssiontouchngomy_refund($params) {
    return Payssion::refund($params);
}

?>