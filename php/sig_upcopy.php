<?php
	$connect = mysqli_connect("localhost", "root", "root", "test") or die("summut gungan rong");
   //When the user has been created,it wil be put onto the database, so new users can look onto the website, it will also connects  to 			     the database so it can put the new  users and passwords onto the database.
	if(isset($_POST["username"])){
	$new_user = mysqli_real_escape_string($connect, ($_POST["username"]));
		$new_pass = $_POST["password"];
     
       
        // $query = "SELECT * FROM c9 WHERE Username=$new_user ";
       
		$insert = "INSERT INTO tutor (Username, Password)
				   VALUES ('$new_user', '$new_pass')";
          $results = mysqli_query($connect, $insert);
		if($results){
		session_destroy();
		header("Location: login.php");
		}
			}
?>
