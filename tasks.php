<?php
$db = mysqli_connect("localhost", "root", "root", "c9") or die("QUERY failed". mysqli_error($db));
        if (isset($_POST['task'])) {
                    $student = $_SESSION['Username'];
                    $task = $_POST['task'];
                    $query = "INSERT INTO tasks(task, student) VALUES('$task', '$student')";
                    $results = mysqli_query($db, $query);
                    //if $result is true then echo this error.
                    if($results) {
            //echo that it worked
      //  echo 'QUERY ok<br />';
    }
    else
      {
    //if it fails then do this.
      //  echo 'QUERY ';
    }
}
  //deleting the task.
  if(isset($_GET['del_task']))
  {
      $id = $_GET['del_task'];
      mysqli_query($db,"DELETE FROM tasks WHERE id=$id");
      header('location:profilepage.php');
  }
  //selecting the db and using tasks to not reuse the task thats already been used to store the data.
  $tasks = mysqli_query($db, "SELECT * FROM tasks");
 ?>
