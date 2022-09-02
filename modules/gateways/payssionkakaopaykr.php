<?php
/*
 Plugin Name: KakaoPay for WHMCS
 Description: KakaoPay payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionkakaopaykr_config() {
    return Payssion::getConfig('KakaoPay');
}

function payssionkakaopaykr_link($params) {
    return Payssion::getLink($params, 'kakaopay_kr');
}

function payssionkakaopaykr_refund($params) {
    return Payssion::refund($params);
}

?>