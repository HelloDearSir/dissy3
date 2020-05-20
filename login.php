<?php
<<<<<<< HEAD
if(isset($_POST["username"])) {
    $uname = $_POST["username"];
    $pword = $_POST ["password"];
} else {
    $uname= "";
    $pword ="";
}

// When the log in as be checked  it will start the session for this page.
session_start();
$_SESSION['login'] = "";

// This if statement will only work after a POST happens
if($_SERVER['REQUEST_METHOD'] === "POST") {
    // Connect to the DB & check for error
    $conn = new mysqli("localhost", "root", "root", "c9");
    if($conn->connect_error) die("[E] Could not connect to DB: " . $conn->connect_error);

    // Run the SQL code & check for error
    $query = $conn->query("SELECT * FROM users WHERE Username = '$uname' AND Password = '$pword'");
    $query2 = $conn->query("SELECT * FROM tutor WHERE Username = '$uname' AND Password = '$pword'");
    if($query == false) die("[E] Could not query DB: " . $conn->error);
    if($query2 == false) die("[E] Could not query DB: " . $conn->error);
    // Copy num_rows to result var
    $result = $query->num_rows;
    $results = $query2->num_rows;

    // Open error.txt or die if read-only folder
    $error = fopen("error.txt", "a") or die("[E] Cannot open error.txt");

    // If there are more than zero rows in result, but less than two (so one) set login to true
    if($result > 0 && $result < 2) {
        $_SESSION['login']= "That GRRRRREAT";
        $_SESSION['username'] = $uname;
        $_SESSION['pword'] = $pword;
    } else {
        // Tell the user there is no such username/password
        echo "<div class='WrongData'> The username or password you have entered is not correct.</div>";

        // When the user has failed to log in it will write it into the error text file, this is make sure that it will show what the user has tried so it can prevent anyone for guessing the usernames/passwords.
        fwrite ($error, "The username is: " . $_POST['username']. "\nThe password  is: "  .   $_POST['password'] . "\n\n");
    }
    if($results > 0 && $results < 2) {
        $_SESSION['login']= "That GRRRRREAT";
        $_SESSION['username'] = $uname;
        $_SESSION['pword'] = $pword;
    } else {
        // Tell the user there is no such username/password
        echo "<div class='WrongData'> The username or password you have entered is not correct.</div>";

        // When the user has failed to log in it will write it into the error text file, this is make sure that it will show what the user has tried so it can prevent anyone for guessing the usernames/passwords.
        fwrite ($error, "The username is: " . $_POST['username']. "\nThe password  is: "  .   $_POST['password'] . "\n\n");
    }
}



// Check the login variable now to see if it is true or not. If it is true, redirect.
if($_SESSION['login'] == "That GRRRRREAT") header("Location: profilepage.php");

?>

=======
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
>>>>>>> parent of b50c7b2... working version so far

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


<<<<<<< HEAD
        <div class="row">

<div class=" LoginBoxContainer col-xs-12 col-md-6">

 <h3>Existing users  </h3>

    <form action="login.php" method="post">

        <fieldset>

        <div>
            <label>Username</label>
                <input size ="17" type= "text" class="Medium Text form-control" size"20" maxlengh= "15" name="username">
                </div>

            <div>

           <label> Password </label>

            <input size ="17" type= "password" size"20" maxlengh= "15" name="password" class="Medium Text form-control">

             </div>
             <div class="next loginbutton">

           <input type="submit" value="login" class="btn btn-primary form-control">

             </div>

             </fieldset>

             </form>

 </div>



<div class="col-xs-12 col-md-6">

<h3> Not Registered?</h3>
<div>
<p> If  you are a student and don't have a log in please <a href="sign_up.php">Click here</a>     </p>
<a class= "btn btn-default btn-primary form-control" href="sign_up.php">Sign up</a>
</div>
<div>
<p> If you are a tutor and don't have a log in please <a href="sign_upTutor.php"> Sign up</a>
<a class= "btn btn-default btn-primary form-control" href="sign_upTutor.php">Sign up</a>
</div>
=======
             </tr>
      <tr>

      <td><input type="submit" value="login" id ="login"></td>
      </tr>
       <tr>

           <td><button id = "signup"> <a href  = "sign_up.php" id="fonts">Sign Up     </a></button>      </td>
     </tr>
      </table>
      </form>
>>>>>>> parent of b50c7b2... working version so far
    </div>
</body>
</html>
