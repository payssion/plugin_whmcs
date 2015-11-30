<?php
/*
Plugin Name: payssion for WHMCS
Description: payssion payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: payssion
Author URI: https://www.payssion.com
Release date: 11/16/2015
*/

@require_once ("../../../init.php");
@require_once ("../../../dbconnect.php");
@require_once ("../../../includes/functions.php");
@require_once ("../../../includes/gatewayfunctions.php");
@require_once ("../../../includes/invoicefunctions.php");
@require_once ("../payssion/payssion.php");

$pm_id = _POST['pm_id']
$pm_name = str_replace('_', '', $pm_id);
$gatewaymodule = "payssion" . $pm_name;

$GATEWAY = getGatewayVariables($gatewaymodule);

if (!$GATEWAY || !$GATEWAY["type"]) {
	logTransaction('PAYSSION', '', 'Module Not Activated');
	die("Module Not Activated");
}

// Assign payment notification values to local variables
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$track_id = $_POST['track_id'];
$sub_track_id = $_POST['sub_track_id'];
$state = $_POST['state'];
$transid = $_POST['transacion_id'];
$fee = $_POST['total'] - $_POST['net'];

$check_array = array(
		Payssion::$_api_key,
		$pm_id,
		$amount,
		$currency,
		$track_id,
		$sub_track_id,
		$state,
		Payssion::$_secret_key
);
$check_msg = implode('|', $check_array);
echo "check_msg=$check_msg";
$check_sig = md5($check_msg);
$notify_sig = $_POST['notify_sig'];
if ($notify_sig == $check_sig) {
	
} else {
	logTransaction('PAYSSION', $track_id, 'failed to validate IPN');
	exit();
}

if ($state == 'completed') {
    $invoiceid = checkCbInvoiceID($track_id, $GATEWAY["name"]); # Checks invoice ID is a valid invoice number or ends processing
    //checkCbTransID($transid); # Checks transaction number isn't already in the database and ends processing if it does
    $table  = "tblaccounts";
    $fields = "transid";
    $where  = array("transid" => $transid);
    $result = select_query($table, $fields, $where);
    $data   = mysql_fetch_array($result);
    if (!$data) {
        addInvoicePayment($invoiceid, $transid, $amount, $fee, $gatewaymodule);
        logTransaction($GATEWAY["name"], $_POST, "Successful");
    }
    echo "success";
} else {
    echo 'faild';
}


?>