<?php
session_start();
$request_url	= 'https://testpos.payby.me/webpayment/request.aspx';
$payment_url	= 'https://testpos.payby.me/webpayment/Pay.aspx?hash=secretkey001';
$username       = 'username001';
$password	= 'token001';
$syncId		= 123456;
$subCompany	= 'Sanaltebesir';
$assetName	= 'uyelikpaketi';
$assetPrice	= $_POST["price"]; // 100 = 1 TL
$clientIp	= $_SERVER['REMOTE_ADDR'];
$countryCode	= 'TR';
$languageCode	= 'tr';
$notifyPage	= 'www.sanaltebesir.com/notify';
$redirectPage = 'www.sanaltebesir.com/success';
$errorPage	= 'www.sanaltebesir.com/error';

// Usage
echo make_request($username, $password, $syncId, $shortcode, $subCompany, $assetName, $assetPrice, $clientIp, $countryCode, $languageCode);
function make_request(
$username,
$password,
$syncId,
$shortcode,
$subCompany,
$assetName,
$assetPrice,
$clientIp,
$countryCode,
$languageCode) {
$postFields = '';
$postFields .= 'username=' . $username;
$postFields .= '&password=' . $password;
$postFields .= '&syncId=' . $syncId;
$postFields .= '&shortcode=' . $shortcode;
$postFields .= '&subCompany=' . $subCompany;
$postFields .= '&assetName=' . $assetName;
$postFields .= '&assetPrice=' . $assetPrice;
$postFields .= '&notifyPage=' . $notifyPage;
$postFields .= '&errorPage=' . $errorPage;
$postFields .= '&redirectPage=' . $redirectPage;
$postFields .= '&clientIp=' . is_null($clientIp) ? $_SERVER['REMOTE_ADDR'] : $clientIp;
$postFields .= '&countryCode=' . is_null($countryCode) ? 'TR' : $countryCode;
$postFields .= '&languageCode=' . is_null($languageCode) ? 'tr' : $languageCode;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $request_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl) or die('Connection Error!');
curl_close ($curl);
return $result;
}

function get_hash($result)
{
 $params = parse_str($result);
 if(!is_null($params) && !is_null($params['ErrorCode'] && $params['ErrorCode'] == '1000')) {
    $hash = $params['ErrorDesc'];
 } else {
    (!is_null($params) && !is_null($params['ErrorCode']) ? die($params['ErrorCode']) : die('An Error Occoured!'));
 }
 return $hash;
}
function user_redirect($hash)
{
     header("Location: $payment_url");
}
?>