<?php
/*
 Plugin Name: DuitNow for WHMCS
 Description: DuitNow payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionduitnowmy_config() {
    return Payssion::getConfig('DuitNow');
}

function payssionduitnowmy_link($params) {
    return Payssion::getLink($params, 'duitnow_my');
}

?>