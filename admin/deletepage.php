<?php
	extract($_REQUEST); 
include "includes/functions.php";
if(isset($id))
{
deletePage($id);
}
?>