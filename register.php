<?php

$db = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
   //When the user has been created,it wil be put onto the database, so new users can look onto the website, it will also connects  to 			     the database so it can put the new  users and passwords onto the database. 
	if(isset($_POST["username"])){
		$new_user = $_POST["username"];
		$new_pass = $_POST["password"];

		$insert = "INSERT INTO Users(Username, Password) 
				   VALUES ('$new_user', '".md5($new_pass)."' ";
		if(mysqli_query($insert, $db)){
		session_destroy();
		header("Location: login.php");
		}
	}
?>