<?php

include('dbconnect.php');
extract($_REQUEST);
mysql_query("update menu set menu_name='$menu_name' where id='$id'")or die(mysql_error());
header("location:new_menu.php?editsuc=editsuc");

   ?>