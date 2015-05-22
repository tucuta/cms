<?php
extract($_REQUEST);  
include("dbconnect.php");
$sql = mysql_query("INSERT INTO `users`(`uid`,`uname`,`upass`,`email`,`role`) VALUES (NULL,'$uname','$upass','$email','$role')")or die(mysql_error());
	if($sql) // if that data is stored into the mysql
	{
		header("location:allusers.php?succ=succ");  
		
		//echo " successfully Added  One User";
	}
		else
		{
		
		header("location:adduser.php?err=err");
	}
	



?>