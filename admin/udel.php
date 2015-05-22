<?php

include("dbconnect.php");
extract($_REQUEST);
$del = $_GET['id'];
 //echo $del;
    $query= mysql_query("delete  from users where uid ='$del'")or die(mysql_error());
    
    if($query)
{
	header("location:allusers.php");
	//echo "one record deleted successfully"; 
}
else
{
	echo "delete failed";
}
     
?>