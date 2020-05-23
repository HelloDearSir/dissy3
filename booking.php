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
    $TutorAviable= $_POST['available'];
        $query = "INSERT INTO booking(first, Last, StudentUser, Phone, location, tutor,bookingd,time,timends,status) VALUES('$student', '$last','$studentusername', '$phone',  '$location', '$tutor', '$dates', '$time','$times','$TutorAviable')";
    $results = mysqli_query($db, $query);
//if !$run_query is true then echo this error.
    if($results) {
            //echo that it worked
            	header("Location: Sessions.php");
      //  echo 'QUERY ok<br />';

    } else {
    //if it fails then do this.
      //  echo 'QUERY failed -- ';
    }
}