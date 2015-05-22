<?php
include "dbconnect.php";

function savePage($title, $content, $menu)
{
	$sql=mysql_query("INSERT INTO `pages` (`id`, `page_title`, `page_content`, `menu_id`) VALUES (NULL, '$title', '$content', '$menu')") or die(mysql_error());
	if($sql) 
	{
		header("location: newpost.php?save=success"); 
	}
	else
	{
		header("location: newpost.php?save=failure"); 
	}

}

function updatePage($title, $content, $menu,$id)
{
	$sql=mysql_query("UPDATE `pages` SET `page_title` = '$title', `page_content` = '$content', `menu_id` = '$menu' WHERE `id` = '$id'") or die(mysql_error());
	if($sql) 
	{
		header("location: allpages.php?update=success"); 
	}
	else
	{
		header("location: newpost.php?update=failure"); 
	}

}

function deletePage($id)
{
	$sql=mysql_query("DELETE FROM `pages` WHERE `id` = '$id'") or die(mysql_error());
	if($sql) 
	{
		header("location: allpages.php?delete=success"); 
	}
	else
	{
		header("location: newpost.php?delete=failure"); 
	}

}


?>