<?php

include("dbconnect.php");
extract($_REQUEST);



    $sql = mysql_query("update users SET uname = '$username',email = '$email',role = '$role' where uname ='$username' ")or die(mysql_error());
$row= mysql_fetch_array($sql);
if($sql)

{
	header("location:allusers.php?uupdate=suc");
	//cho "one record updated successfully"; 
}

     
?>