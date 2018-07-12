<?php
$mysql_host='localhost:4000';
$mysql_user='root';
$mysql_pass='';
$mysql_db='test';

if(!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysqli_select_db($mysql_db)){
die('could not connect');
}
?>
