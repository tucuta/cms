<?php
 include('newdb.php');
 $edit=$_GET['ed'];
 $sql = mysql_query("select * from menu where id='$edit'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form method="post">
<table>
<tr>
	<td>Menu Name:<input type='text' value='<?=$row['menu_name'];?>' name='menu_name'/></td>
</tr>

<tr>
	<td><input type="submit" name="submit" value="Enter"></td>
</tr>
</table>
</form>
<?php
extract($_REQUEST);
if(isset($_POST['submit']))
{
	$edit=$_GET['ed'];
mysql_query("update menu set menu_name='$menu_name' where id='$edit'")or die(mysql_error());
header("location:index.php");
}
?>