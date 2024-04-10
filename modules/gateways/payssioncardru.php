<?php
/*
 Plugin Name: Russian Card for WHMCS
 Description: Russian Card payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssioncardru_config() {
    return Payssion::getConfig('Russian Card');
}

function payssioncardru_link($params) {
    return Payssion::getLink($params, 'card_ru');
}

function payssioncardru_refund($params) {
    return Payssion::refund($params);
}
?>