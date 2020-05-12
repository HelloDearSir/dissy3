<?php 
	$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
if(isset($_GET['edit']))
{
    $id=$_GET['edit'];
    $results=mysqli_query("SELECT * FROM booking");
    $results=mysql_fetch_array($sql);
}
?>
<form action="." method ="POST">
Student: <input type="text" name="newName" value="<?php echo $row['status'];?>"
Ids: <input type="text" name="newName" value="<?php echo $row['id'];?>"
</form>
