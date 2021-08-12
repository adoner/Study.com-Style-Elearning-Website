<?php
try 
{
$db = new PDO("mysql:dbname=databasename;host=localhost", "username", "pass" );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("SET NAMES utf8");
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>