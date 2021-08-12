<?php

define('API_ACCESS_KEY','AAAA-dJ6axc:APA91bF00qUTgX0RPU2-ekO5QHQr1zjAV0Nmf2ZBFe_rgJ9vDTE46rKGO5g7OVLpFVQdhj-M81d4MjRjtnaK27tXJj1uX3C8WRY9sHCd-Vawv0lQbDAT9NAeWXlxv0n4riaOGTTBu6Cv');
$fcmUrl = 'https://fcm.googleapis.com/fcm/send';
$token='fQMrpcOpN80:APA91bEOooyJlU2huSX-PsDE0IV8EjfyF7hF5VN36T0c8VnoedOGn-5y1vHtbKVwKJ8B05HxWGFOnuJxjWrhQDPIl_-m38i_cH1lGc8Mazm0B0tQM5Sc6FjFBBOXbvLirDMc8PKDCtuB';

$notification = array('title'=>'title','body'=>'body of message','icon' =>'myIcon','sound'=>'mySound');
$extraNotificationData = array('message' => $notification,'moredata' =>'dd');

$fcmNotification = array(
	//'registration_ids' => $tokenList, //multple token array
	'to'        => $token, //single token
	'notification' => $notification,
	'data' => $extraNotificationData
);

$headers = array(
	'Authorization: key=' . API_ACCESS_KEY,
	'Content-Type: application/json'
);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$fcmUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
$result = curl_exec($ch);
curl_close($ch);


echo $result;
?>