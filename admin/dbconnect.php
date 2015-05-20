<?php

$sqlcon = mysql_connect('localhost','root','vertrigo') or die(mysql_error());

$db = mysql_select_db('icms',$sqlcon) or die(mysql_error());


if($db){
	//echo 'Db Connected';
}else{
	echo 'DB Failure';
}




?>