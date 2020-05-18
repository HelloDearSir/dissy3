<?php
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
    $conn = new mysqli("localhost", "root", "root", "test");
    if($conn->connect_error) die("[E] Could not connect to DB: " . $conn->connect_error);
   
    // Run the SQL code & check for error
    $query = $conn->query("SELECT * FROM tutor WHERE Username = '$uname' AND Password = '$pword'");
    if($query == false) die("[E] Could not query DB: " . $conn->error);
   
    // Copy num_rows to result var
    $result = $query->num_rows;
   
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
}
 
// Check the login variable now to see if it is true or not. If it is true, redirect.
<<<<<<< HEAD
if($_SESSION['login'] == "That GRRRRREAT") header("Location: profilepage.php");
=======
if($_SESSION['login'] == "That GRRRRREAT") header("Location: profilepagetutor.php");
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
 
?>
 

<!doctype html>

<html>

  <?php require 'meta.php' ?>

    <body>

<?php require 'header.php'  ?>



<div class="container">



        <div class="col-xs-12">

            <h1> Log In   </h1>

        </div>

        <div class="row">

<div class=" LoginBoxContainer col-xs-12 col-md-6">

 <h3>Existing users  </h3>

    <form action="TutorLogin.php" method="post">

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
<p> If you are a tutor and don't have a log in please <a href="sign_upTutor.php"> Sign up</a>
<a class= "btn btn-default btn-primary form-control" href="sign_upTutor.php">Sign up</a>


    </div>
     </div>
        </div>
</div>







</body>

</html>

