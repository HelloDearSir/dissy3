<?php
    $db = mysqli_connect("localhost", "root", "root", "c9") or die("QUERY failed". mysqli_error($db));
  if (isset($_POST['send'])) {
        $sender_name = $_SESSION['username'];
        //use user as username is a cookie.
        $reciver = $_POST['user'];
        $message = $_POST['nmess'];
       //insert the data into
        $query = "INSERT INTO chat(messager, messagee,msg ) VALUES('$sender_name', '$reciver', '$message')";
        $results =  mysqli_query($db, $query);
    //if %results is working then do header('location:messages.php?user='.$reciver)
    if($results)
      {
        header ('Location:messages.php?user='.$reciver);
      }
       else
        {
        echo "query failed";
    }
}
 ?>
