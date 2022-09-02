<?php
/*
 Plugin Name: FPS for WHMCS
 Description: FPS payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionfpshk_config() {
    return Payssion::getConfig('FPS');
}

function payssionfpshk_link($params) {
    return Payssion::getLink($params, 'fps_hk');
}

function payssionfpshk_refund($params) {
    return Payssion::refund($params);
}

?>