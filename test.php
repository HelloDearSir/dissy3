<?php 
 $db = mysqli_connect("localhost", "root", "root", "c9") or die("QUERY failed". mysqli_error($db)); 
 if (isset($_POST['send'])) {
  $sender_name = $_SESSION['Username'];
  $reciver = header ('Location:messages.php?user='.$reciver);
  $message = $_POST['nmesss'];



  $query = "INSERT INTO chat(messager, messagee,msg ) VALUES('$sender_name', '$reciver', '$message')";
  $results =  mysqli_query($db, $query); 
  if($results)
  {
    ?>
    <div class="user">
        <a href='#'> <?php echo $_SESSION['username']; ?></a>
        <p> <?php echo $message ?></p>
    </div>
    <?php
}
else
{
  //if ($results) is false then do this.
  echo $query;
}
  }



?> 