<?php
$con = mysql_connect('localhost','root','vertrigo')or die(mysql_error());
$db = mysql_select_db('icms', $con)or die(mysql_error());
?>