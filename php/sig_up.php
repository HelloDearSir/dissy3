<?php
		$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
   //When the user has been created,it wil be put onto the database, so new users can look onto the website, it will also connects  to 			     the database so it can put the new  users and passwords onto the database.
	if(isset($_POST["username"])){
	$new_user = mysqli_real_escape_string($connect, ($_POST["username"]));
        $new_pass = $_POST["password"];
        $confirm_pass = $_POST["password2"];
		$Universty =$_POST["University"];
        $DsaTutor =$_POST["dsaTutor"];
        $TypeOfStudy =$_POST['Study'];
        $Firstname =$_POST['Firstname'];
        $Lastname=$_POST['Lastname'];

        if (strcmp($new_pass, $confirm_pass) !== 0)
        {
            echo 'Passwords did not match';
        // $query = "SELECT * FROM c9 WHERE Username=$new_user ";
        // $hashed = hash('sha512', $new_pass);
	
        }
        else 
        {
            $insert = "INSERT INTO users(Username, Password, University, dsaTutor, Study,Firstname, Lastname)
            VALUES ('$new_user', '$new_pass', '$Universty', '$DsaTutor', '$TypeOfStudy', '$Firstname', '$Lastname')";
   $results = mysqli_query($connect, $insert);
   exit(header('Location: login.php'));
        }
			}
?>