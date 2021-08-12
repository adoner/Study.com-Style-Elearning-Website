<?php 
session_start();
require_once("../includes/db.php");

$qry = $db->query("SELECT * FROM content WHERE seo = 'hakkimizda'")->fetch();

?>
<div>
<h4><?php echo $qry["title"];?></h4>
<p style="text-align:justify; padding:10px 5px 10px 5px"><?php echo $qry["contentbody"];?></p>
</div>