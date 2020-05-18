<?php 
$db = mysqli_connect("localhost", "root", "root", "c9") or die("QUERY failed". mysqli_error($db)); 
  //deleting the task.
  if(isset($_GET['accept']))
  {
    $id = $_GET['accept'];
   echo "<p >usersname available</p>";
    header('location:books.php');
  }
  //selecting the db and using tasks to not reuse the task thats already been used to store the data.
  $book = mysqli_query($db, "SELECT * FROM booking ");
 ?>



?>  