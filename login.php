<?php
			if(isset($_POST["username"])) {
        $username = $_POST["username"];
		    $pass = $_POST["password"];
		$validated = false;
	}  else   {
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
			$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
			$result   = $connect->query("SELECT * FROM `users` WHERE `Username` = '$username' AND `Password` = '$pass'");
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
				header('Location: profilepage.php');
		}
			else {
		   	$_SESSION['login'] = "";
			echo "<p>Your Error has been Logged</p>";
			//When the user has failed to log in it will log it onto the error text file, this is make sure that it will show what the user has tried so it can prevent anyone for guessing the usernames/passwords.

			echo " Sorry you have put in the wrong information.";
		}
	}
	else
	{
		$_SESSION['login'] = "";
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/log.css">
    <title>Login</title>
  </head>
  <body>

      <div id ="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle">
        <div class = "menu">
       <a href="index.html">Home </a>
       <a href="login.php">Log in  </a>
       <a href="sign_up.php">Sign Up</a>
              </div>
                                </div>


<div id= "container">


<p id = "titles" > Log in: </p>
<form action="login.php" method="post">
 <table>

    <tr>
        <td class = "user" > Username: </td>

     <td><input type= "text"name="username" placeholder="username"></td>


     </tr>

     <tr>

     <td class = "user">Password: </td>

     <td><input size =/"20/" type= "password" size"20" maxlengh= "15" name="password" placeholder="Password"></td>


             </tr>
      <tr>

      <td><input type="submit" value="login" id ="login"></td>
      </tr>
       <tr>

           <td><button id = "signup"> <a href  = "sign_up.php" id="fonts">Sign Up     </a></button>      </td>
     </tr>
      </table>
      </form>
    </div>
</body>
</html>
