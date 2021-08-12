<?php
session_start();
require_once("../../includes/db.php");
	
$userid = $_POST["userid"];
$packName = $_POST["packagename"];
$packPrice = $_POST["price"];
$questionLimit = $_POST["limit"];
$orderdate = date('Y-m-d H:i:s');

function RandomString($length) {
	$keys = array_merge(range(0,9), range('a', 'z'));

	$key = "";
	for($i=0; $i < $length; $i++) {
		$key .= $keys[mt_rand(0, count($keys) - 1)];
	}
	return $key;
}

$ordernumber = RandomString(20);

$sql = $db->query("INSERT INTO orders (packagename, questionlimit, price, orderdate, ordernumber, userid) VALUES('$packName','$questionLimit','$packPrice','$orderdate','$ordernumber','$userid')");

// echoing JSON response
echo json_encode($response);

$_SESSION["ordernumber"] = $ordernumber;

?>

