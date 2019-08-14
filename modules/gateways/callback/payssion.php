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
@require_once ("../../../includes/functions.php");
@require_once ("../../../includes/gatewayfunctions.php");
@require_once ("../../../includes/invoicefunctions.php");
@require_once ("../payssion/payssion.php");

$pm_id = $_POST['pm_id'];
$pm_name = str_replace('_', '', $pm_id);

$gatewaymodule = "payssion" . $pm_name;
$gateway = getGatewayVariables($gatewaymodule);
if (!$gateway || !$gateway["type"]) {
	logTransaction('PAYSSION', '', 'Module Not Activated');
	die("Module Not Activated");
}

// Assign payment notification values to local variables
$amount = $_POST['amount'];
$paid = $_POST['paid'];
$currency = $_POST['currency'];
$track_id = $_POST['track_id'];
$sub_track_id = $_POST['sub_track_id'];
$state = $_POST['state'];
$transid = $_POST['transaction_id'];
$fee = $_POST['fee'];

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
$check_sig = md5($check_msg);
$notify_sig = $_POST['notify_sig'];
if ($notify_sig == $check_sig) {
	
} else {
	logTransaction('PAYSSION', $track_id, 'failed to validate IPN');
	header('HTTP/1.0 406 Not Acceptable');
	exit();
}

if ($paid > 0) {
	echo "$state:" . $gatewaymodule . $track_id;
	$invoiceid = checkCbInvoiceID($track_id, $gatewaymodule); # Checks invoice ID is a valid invoice number or ends processing
	echo "invoiceid=$invoiceid";
	checkCbTransID($transid); # Checks transaction number isn't already in the database and ends processing if it does
	echo "checkCbTransID";
	
	if ('completed' == $state) {
		if (array_key_exists('currency_settle', $_POST)) {
			$paid = $_POST['amount_local'];
			$fee = 0;
		}
	} else if ('paid_partial' == $state || 'paid_more' == $state) {
		if (array_key_exists('currency_settle', $_POST)) {
			$paid = $paid / $amount * $_POST['amount_local'];
			$fee = 0;
		}
	} else {
		echo "$state not correct";
		exit();
	}
	
	// Convert currency
	if (isset($gateway['convertto'])) {
		$result = mysql_query("
            SELECT rate FROM tblcurrencies
            WHERE code = '" . mysql_real_escape_string($currency) . "'
        ");
		$rate = '';
		while ($row = mysql_fetch_array($result)) {
			$rate = $row['rate'];
		}
		$paid /= $rate;
	}
	
	// Formats amount in cent units to string with dot separator
	$paid = number_format($paid, 2, '.', '');
	addInvoicePayment($invoiceid, $transid, $paid, $fee, $gatewaymodule);
	logTransaction('PAYSSION', $_POST, "Successful $state:$paid:$rate");
	echo "success:$state:$paid:$rate";
} else {
    echo 'not paid';
}


?>