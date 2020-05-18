<?php

session_start();
require_once("connection.php");
if(isset($_SESSION['username']) and isset($_GET['user']))
{
 if(isset($_POST['text']))
 {
   if($_POST['text'] !='')
   {
    $sender_name = $_SESSION['username'];
    $reciver_name = $_GET['user'];
    $message = $_POST['text'];
    $query= 'SELECT * FROM  `chat` WHERE `messager`= "'.$_SESSION['username'].'"
    AND `messagee` ="'.$_GET['user'].'"
    OR `messager` = "'.$_GET['user'].'"
    AND `messagee` = "'.$_SESSION['username'].'" ';
    $results = mysqli_query($connect, $query);
   
   if($results)
   {
      
   } else 
    {
        echo $query;
    }
   
}
   else 
   {
       echo'please write somethin first';
   }
 }
 else 
 {
     echo"problem with the text";
 }
}
else 
{
    echo 'Please log in or select a user';
}

?>
