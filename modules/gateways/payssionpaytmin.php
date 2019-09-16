<?php

require_once realpath(dirname(__FILE__)) . "/payssion/payssion.php";

function payssionpaytmin_config() {
	return Payssion::getConfig('Paytm');
}

function payssionpaytmin_link($params) {
	return Payssion::getLink($params, 'paytm_in');
}

function payssionpaytmin_refund($params) {
	return Payssion::refund($params);
}

?>