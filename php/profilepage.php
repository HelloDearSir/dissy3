	<?php 
 session_start();
 if($_SESSION['login'] != "That GRRRRREAT")

 {
	 header('Location: login.php');
	 exit();
 }


?>



				<html>
<head> <link rel="stylesheet" a href="css/uplaod.css"> Upload </head>
<style>

#main
{
 border: 1px solid black;
 width: 700px;
 height: 500px;
 margin:24px auto;
}
#message
{
 width:98%;
 border: 1px solid blue; height:400px;
}
</style>
 <body>
<ul>
<li style="float:right" ><a href="menuTL.html">Home</a></li>
 <li style="float:right" ><a href="FAQ.html">FAQ</a></li>
<li><a href="login.html">Log In</a></li>
<li><a href="sign_up.html">Register </a></li>
<li><a href="uplaod.html">Profile</a></li>
<li><a href= "logout.php"> sign out</a></li>
 <li style="float:right" ><a href="https://docs.google.com/forms/d/e/1FAIpQLSfaORAYIOlYxE3lXU6CdnVpHUQOZFCQZmoKq18qKU_6O8FizA/viewform?usp=sf_link">FeedBack Form </a></li>
</ul>

<h1>  My Profile  </h1>

 <div id = "main">  <div id = "message">
 </div>
 <?php
   include('connection.php');
     if(isset($_POST['sumbit']))
     {
      $message = $_POST['message'];
      $q= 'INSERT INTO `message` (`messageid`,`messages`, `username`)
      VALUES("", "'.$message.'", "'.$_SESSION['username'].'")
        ';
        if(mysqli_query($con, $q))
        {
         echo '<h4 stlye="color:red>'.$_SESSION['username'].'</h4>';
         echo '<p>'.$message.'</p>';
        }

     }

 ?>
<form method="post">
 <input type="text" name="message" placeholder"type your message"/>
 <input type="submit" name="submit" value="message"/>
</form>



   </div>


</body>
</html>
