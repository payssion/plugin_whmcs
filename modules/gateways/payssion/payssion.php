<?php
/*
Plugin Name: PAYSSION for WHMCS
Description: PAYSSION payment gateway plugin for WHMCS
Version: 1.0
Compatible with: WHMCS 5.3.14, 6.0.2
Author: PAYSSION
Author URI: https://www.payssion.com
Release date: 11/11/2015
*/

class Payssion {
	public static $_api_key = 'you api key';
	public static $_secret_key = 'you secret key';
	
	public static function getPMId($class_name) {
		$index = strpos($class_name, '_');
		return strtolower(substr($class_name, $index + 1));
	}
	
	public static function getConfig($pm_name) {
		$configarray = array(
		"FriendlyName" => array(
			"Type" => "System",
			"Value" => " $pm_name via Payssion"
		),
		"testmode" => array(
				"FriendlyName" => "Test Mode", 
				"Type" => "yesno", 
				"Description" => "Please make sure to use your keys at your sandbox account in order to enable test mode", 
		));
		
		return $configarray;
	}
	
	public static function getLink(&$params, $pm_id) {
		$address = $params['clientdetails']['address1'].' '.$params['clientdetails']['address2'];
		$url = '';
		if ($params['testmode'] == 'on') {
			$url = 'http://sandbox.payssion.com/payment/create.html';
		} else {
			$url = 'https://www.payssion.com/payment/create.html';
		}
		
		$api_key = self::$_api_key;
		$secret_key = self::$_secret_key;
		$source = 'whmcs';
		
		// Invoice Parameters
		$track_id = $params['invoiceid'];
		$description = $params["description"];
		$amount = $params['amount'];
		$currency = $params['currency'];
		
		// Client Parameters
		$payer_name = $params['clientdetails']['firstname'] . ' ' . $params['clientdetails']['lastname'];
		$payer_email = $params['clientdetails']['email'];
		
		$module_name = $params['paymentmethod'];
		$system_url = $params['systemurl'];
		$notify_url = $system_url . '/modules/gateways/callback/payssion.php';
		
		$arr = array($api_key, $pm_id, $amount, $currency,
				$track_id, '', $secret_key);
		$api_sig = md5(implode('|', $arr));
		
		$code = '<form method="post" action="' . $url . '">
		<input type="hidden" name="source" value="'.$source.'" />
		<input type="hidden" name="api_key" value="'.$api_key.'" />
		<input type="hidden" name="api_sig" value="'.$api_sig.'" />
		<input type="hidden" name="pm_id" value="'.$pm_id.'" />
		<input type="hidden" name="payer_name" value="'.$payer_name.'" />
		<input type="hidden" name="payer_email" value="'.$payer_email.'" />
		<input type="hidden" name="track_id" value="'.$track_id.'" />
		<input type="hidden" name="description" value="'.$description.'" />
		<input type="hidden" name="amount" value="'.$amount.'" />
		<input type="hidden" name="currency" value="'.$currency.'" />
		<input type="hidden" name="notify_url" value="'.$notify_url.'" />
		<input type="hidden" name="success_url" value="'.$params['returnurl'].'" />
		<input type="hidden" name="redirect_url" value="'.$params['returnurl'].'" />
		<input type="submit" value="Pay Now" />
		</form>';
		return $code;
	}
	
	/**
	 * Refund transaction.
	 *
	 * Called when a refund is requested for a previously successful transaction.
	 *
	 * @param array $params Payment Gateway Module Parameters
	 *
	 * @see https://developers.whmcs.com/payment-gateways/refunds/
	 *
	 * @return array Transaction response status
	 */
	public static function refund($params) {
		$url = '';
		if ($params['testmode'] == 'on') {
			$url = 'http://sandbox.payssion.com/api/v1/refunds';
		} else {
			$url = 'https://www.payssion.com/api/v1/refunds';
		}
		
		$transaction_id = $params['transid'];
		$amount = $params['amount'];
		$currency = $params['currency'];
		$request_data = array(
			'api_key' => self::$_api_key,
			'transaction_id' => $transaction_id,
			'amount' => $amount,
			'currency' => $currency,
		);
		$request_data['api_sig'] = md5(self::$_api_key . "|$transaction_id|$amount|$currency|" . self::$_secret_key);
		
		$ch = curl_init($url);
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request_data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($curl);
		
		// Check HTTP status code
		$raw_data = '';
		$errno = curl_errno($ch);
		$status = 'error';
		$trans_id = '';
		$fees = '';
		if (!$errno) {
			$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			switch ($http_code) {
				case 200:  # OK
					$response = json_decode($response, true);
					$raw_data = $response;
					if (200 == $response['result_code']) {
						$status = 'success';
						$trans_id = $response['refund']['transaction_id'];
					}
					break;
				default:
					$raw_data = "Unexpected HTTP code: $http_code, response:$response";
			}
		} else {
			$raw_data = "Failed to send request: $errno " . curl_error($ch);
		}
		curl_close ($curl);
		
		return array(
				// 'success' if successful, otherwise 'declined', 'error' for failure
				'status' => $status,
				// Data to be recorded in the gateway log - can be a string or array
				'rawdata' => $raw_data,
				// Unique Transaction ID for the refund transaction
				'transid' => $trans_id,
				// Optional fee amount for the fee value refunded
				//'fees' => $fees,
		);
	}
}
?>