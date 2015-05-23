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
	echo "Menu Already Existed";
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
                                        <td><a href="edit_menu.php?ed=<?=$key?>"><img src="images/edit.png" height="16px" width="16px"></a></td>
                                        <td><a href="new_menu.php?del=<?=$key?>"  onclick="myFunction()"><img src="images/delete.png" height="16px" width="16px"></a></td>
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
  $view1 = mysql_query("select * from menu where active=1")or die(mysql_error());

while($row1=mysql_fetch_array($view1))
{
  $key=$row1['id'] ;
  //echo $key;
  echo "<li>".  $row1['menu_name'] . "<br>";
  $view = mysql_query("select * from sub_menu where id='$key'")or die(mysql_error());
  while($row=mysql_fetch_array($view))
  {
	$key1=$row['sid'] ;
	echo "<ul>" .$row['submenu_name']. "&nbsp;<a href='edit_submenu.php?ed=$key1'><img src='images/edit.png' height='16px' width='16px'></a>&nbsp;&nbsp;&nbsp;<a href='addsubmenu.php?del=$key1'><img src='images/delete.png' height='16px' width='16px'></a></ul>";
	echo "";
  }
  echo "</li>";
 }	
}
function delete_submenu()
 {
   $delete=$_GET['del'];
 $sql = mysql_query("delete from sub_menu where sid=$delete")or die(mysql_error());
 }
}
/** End code **/

/** dveloped by pavan **/
class Comment
{   
	function insert_comment($email,$comment)
	{
		$dt=date("y-m-d h:i:sa");
		$insert=mysql_query("insert into comments values (NULL,'$email','$comment','$dt','0')") or die(mysql_error());
		
		/*if($insert)
		{
			//echo "commented succesfully";
			
		}
		
		else{echo "not inserted";}*/
	}

function display()
{
	$dis=mysql_query("select *from comments")or die(mysql_error());
	$count=mysql_num_rows($dis);
	
	if(!$count)
{
	die("could not get data".mysql_error());
}
else{
	while($row=mysql_fetch_array($dis))
	{
		$row_array[$row['id']]['email']=$row['email'];
		$row_array[$row['id']]['comment']=$row['comment'];
		$row_array[$row['id']]['dt']=$row['dt'];
	
	}
	echo "<div class='container' id='comm'><pre style='width:50%'>";
	if($count>0)
	{foreach($row_array as $key =>$val){
	?>	
<span class="label-success"><?=$val['email'];?>
<pre><?=$val['comment'];?></pre>
<?=$val['dt'];?></span><a href="comment.php?del=<?=$key?>" name="delete">delete</a>
<?php
}}}
echo "</pre></div>";	
}


function edit()
{
	$edit=$_GET['edit'];
	
 
	$edit=mysql_query("select comment from comments where email=$email")or die(mysql_error());
	
	
}

function delete()
{
	$delete=$_GET['del'];
	
$delet=mysql_query("delete from comments where id='$delete'")or die(mysql_error());	
	if($delet){
		//echo "comment deleted";
	}
	
	else "comment not deleted";
}
	
	}

	/** end code **/
?>