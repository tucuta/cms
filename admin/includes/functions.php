<?php
include "dbconnect.php";
extract($_REQUEST);

/** devloped by eswar **/
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

/** End code **/


/** devloped by Rajesh **/

class Functions
{
function insert_menu($name)
 {
	$active=1;
$menu= mysql_query("select menu_name from menu where menu_name='$name'")or die(mysql_error());
$count = mysql_num_rows($menu);
$menu1= mysql_query("select menu_name from menu where menu_name='$name' and active=1")or die(mysql_error());
$count1 = mysql_num_rows($menu1);
if($count1==1)
{
	//header("location:new_menu.php");
	//echo "Menu Already Existed";
	?>
	<br/>
	<div class="alert alert-danger">
 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Menu Already Existed</strong>
  </div>
	<?php

}
elseif($count!=1)
 {
 mysql_query("insert into menu values(NULL,'$name','$active')")or die(mysql_error()); 
 }
 else
{
  mysql_query("update menu set active=1 where menu_name='$name'");
 }


}
function view_menu()
{
	?>
<div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>View All Menus</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
$view1 = mysql_query("select * from menu where active=1")or die(mysql_error());
$count = mysql_num_rows($view1);
while($row = mysql_fetch_array($view1))
	{
		$row_array[$row['id']]['menu_name']=$row['menu_name'];
	}
	if($count>0)
{
	foreach($row_array as $key => $val)
	{
		?>

<tr>
                                        
                                        <td><?=$val['menu_name'];?></td>
                                        <td><a href="edit_menu.php?ed=<?=$key?>"><img src="images/edit.png" class="img"></a></td>
                                        <td><a href="new_menu.php?del=<?=$key?>"  onclick="myFunction()"><img src="images/delete.png" class="img"></a></td>
                                    </tr>
                                   <br> 
                                </tbody>
                            
<?php
	}
}  
echo "</table>
                        </div>
                    </div>
                </div>";

}
function delete_menu()
{
 $delete=$_GET['del'];
 $sql = mysql_query("update menu set active=0 where id=$delete")or die(mysql_error());
}

function insert_submenu($sub_menu,$menu_list)
 {
  $submenu=mysql_query("select submenu_name from sub_menu where submenu_name='$sub_menu'")or die(mysql_error());
  $count = mysql_num_rows($submenu);
  if($count!=1)
 {
  mysql_query("insert into sub_menu values(NULL,'$sub_menu','$menu_list')")or die(mysql_error());
 }
 else
 {
   echo $sub_menu . " is Already Existed";
 }
}


function view_submenu()
{
	?>
<table>
<tr>
 <td>View All Menus</td>
 <td>Edit</td>
 <td>Delete</td>
</tr>
<?php
$view1 = mysql_query("select * from menu where active=1")or die(mysql_error());
$count = mysql_num_rows($view1);
while($row = mysql_fetch_array($view1))
	{
		$row_array[$row['id']]['menu_name']=$row['menu_name'];
	}
	if($count>0)
{
	foreach($row_array as $key => $val)
	{
		?>

<tr>
	<td><a href="sub_menu.php?menu=<?=$key?>"><?=$val['menu_name'];?></a></td>
</tr>
<?php
 
}
$abc=$_GET['menu'];
 echo $abc;
 $v = mysql_query("select * from sub_menu where menu_id='$abc'")or die(mysql_error());
$co = mysql_num_rows($v);
while($row = mysql_fetch_array($v))
	{
		$row1_array[$row['id']]['submenu_name']=$row['submenu_name'];
	}
	if($co>0)
{
	foreach($row1_array as $key => $val)
	{
?>

<tr>
	<td><?=$val['submenu_name'];?></td>
	
</tr>
<?php
	}
}  
}
echo "</table>";


}
	
}
/** End code **/
?>