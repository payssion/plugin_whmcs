<?php
/*
 Plugin Name: VietQR for WHMCS
 Description: VietQR payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionvietqrvn_config() {
    return Payssion::getConfig('VietQR');
}

function payssionvietqrvn_link($params) {
    return Payssion::getLink($params, 'vietqr_vn');
}

?>