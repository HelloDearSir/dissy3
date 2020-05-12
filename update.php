<?php
   		$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
           if (isset($_POST['submit'])) {
            $newName = $_POST['statue'];
            $id  	 = $_POST['ids'];
    
       
            
           //insert the data into
            $query = "UPDATE booking SET status='$newName' WHERE id='$id'";
            $results =  mysqli_query($connect, $query);

    if($results)
    {
    header("refresh:1; url=books.php"); 
    }
    else 
    {
    echo"booo";
    }
           }
 ?>

 