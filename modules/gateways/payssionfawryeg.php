<?php
/*
 Plugin Name: Fawry for WHMCS
 Description: Fawry payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionfawryeg_config() {
    return Payssion::getConfig('Fawry');
}

function payssionfawryeg_link($params) {
    return Payssion::getLink($params, 'fawry_eg');
}

function payssionfawryeg_refund($params) {
    return Payssion::refund($params);
}

?>