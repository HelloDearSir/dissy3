<?php

$db = mysqli_connect("localhost", "root", "root", "c9") or die("QUERY failed". mysqli_error($db));

if (isset($_POST['submit'])) {
  $student = $_POST['first'];
        $last = $_POST['password'];
       $phone = $_POST['phonenumber'];
   // $email = $_POST['email'];
    $tutor = $_POST['tutor'];
    $location = $_POST['location'];
    $dates = $_POST['bookingd'];
    $time = $_POST['time'];
    $times = $_POST['timz'];
    $studentusername =$_POST['Sname'];
        $query = "INSERT INTO booking(first, Last, StudentUser, Phone, location, tutor,bookingd,time,timends) VALUES('$student', '$last','$studentusername', '$phone',  '$location', '$tutor', '$dates', '$time','$times')";
    $results = mysqli_query($db, $query);
//if !$run_query is true then echo this error.
    if($results) {
            //echo that it worked
            	header("Location: book.php");
      //  echo 'QUERY ok<br />';

    } else {
    //if it fails then do this.
      //  echo 'QUERY failed -- ';
    }
}
//deleting the task.
if(isset($_GET['del_task']))
{
    $id = $_GET['del_task'];
    mysqli_query($db,"DELETE FROM booking WHERE id=$id");
    header('location:books.php');
}
//selecting the db and using tasks to not reuse the task thats already been used to store the data.
$booking = mysqli_query($db, "SELECT * FROM booking");


?>
