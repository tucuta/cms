<script>
function myFunction() {
    confirm("Conform Delete?");
	retrun true;
}
</script>
<?php
include('newdb.php');
class Db
{
function insert_menu($name)
 {
$insert=mysql_query("insert into menu values(NULL,'$name',1)")or die(mysql_error());
if($insert)
  {
 echo "inserted successfully";
 header("location:index.php?ins=ins");
  }
else
 {
echo "Not inserted";
 }
}
function view_menu()
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
	<td><?=$val['menu_name'];?></td>
	<td><a href="edit.php?ed=<?=$key?>" onclick="myFunction()">Edit</a></td>
	<td><a href="index.php?del=<?=$key?>">Delete</a></td>
</tr>
<?php
	}
}  
echo "</table>";

}
function delete_menu()
{
 $delete=$_GET['del'];
 $sql = mysql_query("update menu set active=0 where id=$delete")or die(mysql_error());
}
}

?>