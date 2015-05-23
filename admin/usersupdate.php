<?php

include("dbconnect.php");
extract($_REQUEST);

$upd = $_POST['id'];
 //echo $upd;

    $sql = mysql_query("update users SET uname = '$uname',email = '$email',role = '$role' where uid = '$upd' ")or die(mysql_error());
$row= mysql_fetch_array($sql);
if($sql)

{
	header("location:allusers.php?uupdate=suc");
	//cho "one record updated successfully"; 
}

     
?>