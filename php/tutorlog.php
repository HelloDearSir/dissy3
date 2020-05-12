<?php

	if(isset($_POST["username"])) {
        $username = $_POST["username"];

		$pass      = $_POST["password"];
		$validated = false;
	}else{
		$username= "";
		$pass ="";
	}
	// When the log in as be clieck it will start the session on
	session_start();
	$_SESSION['login'] ="";
	$_SESSION['Username'] = "";
	$_SESSION['pass'] = "";
	$_SESSION['id'] = "";
	if($username!="" && $pass!=""){
		//This is connecting to the databse by finding the database and using the log in details to get onto the database.
			$connect = mysqli_connect("localhost", "root", "root", "test") or die("summut gungan rong");
		$result   = $connect->query("SELECT * FROM `tutor` WHERE `Username` = '$username' AND `Password` = '$pass'");
		$noRows   = $result->num_rows;
		$error    = fopen("error.txt","a") or exit ("cant open the file");
		$usernamesID  = $result->fetch_assoc();
		$_SESSION["id"] = $usernamesID['id'];

		 //This is checking to see if the username and password was correct, if it is correct it will to the protect site.
		if($result > 0){$validated = true;}
		if($validated){
			$_SESSION['login']    = "That GRRRRREAT";
			$_SESSION['Username'] = $username;
			$_SESSION['password'] = $pass;
			header('Location: profilepagetutor.php');
		}else{
		   	$_SESSION['login'] = "";
			echo "<p>Your Error has been Logged</p>";
			//When the user has failed to log in it will log it onto the error text file, this is make sure that it will show what the user has tried so it can prevent anyone for guessing the usernames/passwords.
			fwrite ($error, "\n  The  Username is : " . $_POST['username']. "\n The password  is:"  .   $_POST['password'] . "\n\n");
			echo " Sorry you have put in the wrong information.";
		}
	}else{$_SESSION['login'] = "";}
?>