<?php 
$db = mysqli_connect("localhost", "root", "root", "c9") or die("QUERY failed". mysqli_error($db)); 
  //deleting the task.
  if(isset($_GET['del_task']))
  {
    $id = $_GET['del_task'];
    mysqli_query($db,"DELETE FROM booking WHERE id=$id");
    header('location:books.php');
  }
  //selecting the db and using tasks to not reuse the task thats already been used to store the data.
  $book = mysqli_query($db, "SELECT * FROM booking ");
 ?>



?> 