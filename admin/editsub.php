<?php
session_start();
include('dbconnect.php');
extract($_REQUEST);
mysql_query("update sub_menu set submenu_name='$submenu_name' where sid='$id'")or die(mysql_error());
header("location:addsubmenu.php?editsuc=editsuc");

   ?>