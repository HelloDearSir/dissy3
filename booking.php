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
<<<<<<< HEAD
            	header("Location: index.php");
=======
            	header("Location: Sessions.php");
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
      //  echo 'QUERY ok<br />';

    } else {
    //if it fails then do this.
      //  echo 'QUERY failed -- ';
    }
}
<<<<<<< HEAD
 
=======
//deleting the task.
if(isset($_GET['del_task']))
{
    $id = $_GET['del_task'];
    mysqli_query($db,"DELETE FROM booking WHERE id=$id");
    header('location:books.php');
}
//selecting the db and using tasks to not reuse the task thats already been used to store the data.


 
 
if(isset($_POST['accpetd'])) {
  $id = $_POST['ids'];
 
  if(!empty($id)) {
<<<<<<< HEAD
  mysqli_query($db, "UPDATE booking SET status = 'test' WHERE id ='{$id}' ");
=======
  mysqli_query($db, "UPDATE booking SET statues = 'test' WHERE id ='{$id}' ");
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
  }
          } 



>>>>>>> 60e53da2d963d01990f9348501812428236030e8
 