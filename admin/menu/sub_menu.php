<?php
 include('newdb.php');
 $sql = mysql_query("select * from menu where active=1")or die(mysql_error());
 $count = mysql_num_rows($sql);
 while($row = mysql_fetch_array($sql))
	{
		$row_array[$row['id']]['menu_name']=$row['menu_name'];
	}
?>
<form method="post">
<table>
<tr><td>
<select name='menu_list'> 
       <option value="">---Select Menu---</option>
	   <?php
	   foreach($row_array as $key => $val)
	{
		?>
		<option value='<?php echo $val['menu_name']?>'><?=$val['menu_name']?></option>
		<?php
	}
		?>
		</select>
		</td></tr>
<tr><td>Enter Sub_menu:<input type="text" name="sub_menu"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
<?php
extract($_REQUEST);
if(isset($_POST['submit']))
{
 $sql1=mysql_query("select * from menu where menu_name='$menu_list'")or die(mysql_error());
  $row=mysql_fetch_array($sql1);
 $menu_id=$row['id'];
mysql_query("insert into sub_menu values(NULL,'$sub_menu','$menu_id')")or die(mysql_error());
}
?>