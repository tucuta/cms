<?php
include('dbconnect.php');
include('includes/functions.php');
extract($_REQUEST);
$demo=new Functions();
$demo->insert_submenu($sub_menu,$menu_list);
header("location:addsubmenu.php?asms=asms");
?>