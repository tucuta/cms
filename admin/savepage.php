<?php
	extract($_REQUEST); 
include "includes/functions.php";
if(isset($_POST["submit"]))
{
savePost($title, $content, $menu);
}
?>