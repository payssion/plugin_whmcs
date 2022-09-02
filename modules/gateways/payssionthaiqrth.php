<?php
/*
 Plugin Name: Thai QR for WHMCS
 Description: Thai QR payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionthaiqrth_config() {
    return Payssion::getConfig('Thai QR');
}

function payssionthaiqrth_link($params) {
    return Payssion::getLink($params, 'thaiqr_th');
}

function payssionthaiqrth_refund($params) {
    return Payssion::refund($params);
}

?>