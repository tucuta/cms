<?php
include "dbconnect.php";

function savePost($title, $content, $menu)
{
	$sql=mysql_query("INSERT INTO `icms`.`pages` (`id`, `page_title`, `page_content`, `menu_id`) VALUES (NULL, '$title', '$content', '$menu')") or die(mysql_error());
	if($sql) 
	{
		header("location: newpost.php?save=success"); 
	}
	else
	{
		header("location: newpost.php?savefail=failure"); 
	}

}

?>