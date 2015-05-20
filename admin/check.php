<?php
session_start();
extract($_REQUEST); 
include("dbconnect.php");

$query = "SELECT * FROM admin WHERE username='$aname' AND password='$apass'";
$result =mysql_query($query);
$row  = mysql_fetch_array($result);
if(is_array($row)) {

$_SESSION["user_name"] = $row[username];
//setcookie("user_email", $row[lname], time() + 10, "/");

} else {
header("location: index.php?login=error"); 
}

if(isset($_SESSION["user_name"])) {
header("location: dashboard.php?status=success"); 
}


mysql_close($con);

?>