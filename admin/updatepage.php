<?php
	extract($_REQUEST); 
include "includes/functions.php";
if(isset($_POST["submit"]))
{
updatePage($title, $content, $menu, $id);
}
?>