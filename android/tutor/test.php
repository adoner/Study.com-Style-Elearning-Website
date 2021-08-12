<?php
session_start();
require_once("../../includes/db.php");
$userid = "1";

$qryforprice = $db->query("SELECT * FROM customer_packages WHERE studentid = '1'")->fetch();
$qry = $db->query("SELECT * FROM tutors WHERE id = '$userid'")->fetch();
$updatebalance = $qry["balance"] + $qryforprice["price"];
$qry2 = $db->query("UPDATE tutors SET accountbalance = '$updatebalance' WHERE id = '$userid'");
?>