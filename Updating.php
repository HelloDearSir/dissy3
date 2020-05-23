 <?php
	$db = mysqli_connect('localhost', 'root', 'root', 'c9');

    $status = "";
    $locations = "";
    $timeStart = "";
    $timeEnd = "";
	$id = 0;
	$update = false;

  
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM booking WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: books.php');
    }


    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $status = $_POST['status'];
        $locations = $_POST['locations'];
        $timeStart = $_POST['TimeStart'];
        $timeEnd = $_POST['TimeEnd'];
    
        mysqli_query($db, "UPDATE booking SET time='$timeStart', timends ='$timeEnd', status='$status', location='$locations' WHERE id=$id");
        $_SESSION['message'] = "Address updated!"; 
        header('location: books.php');
    }
    ?>


    