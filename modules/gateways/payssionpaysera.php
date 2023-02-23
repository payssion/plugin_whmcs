<?php
/*
 Plugin Name: Paysera for WHMCS
 Description: Paysera payment gateway plugin for WHMCS
 Author: Payssion
 Author URI: https://www.payssion.com
 */

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpaysera_config() {
    return Payssion::getConfig('Paysera');
}

function payssionpaysera_link($params) {
    return Payssion::getLink($params, 'paysera');
}

?>