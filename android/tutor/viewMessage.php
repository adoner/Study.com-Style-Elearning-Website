<?php 
session_start();
require_once ("../../includes/db.php");

$messageid = $_GET["messageid"];//"1";
$qry = $db->query("SELECT * FROM tutormessages WHERE id = '$messageid'")->fetch();

?>

<div>
<h4><?php echo $qry["title"];?></h4>
<p style="text-align:justify; padding:10px 5px 10px 5px"><?php echo $qry["body"];?></p>
</div>