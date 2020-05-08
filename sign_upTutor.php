<?php
	$connect = mysqli_connect("localhost", "root", "root", "test") or die("summut gungan rong");
   //When the user has been created,it wil be put onto the database, so new users can look onto the website, it will also connects  to 			     the database so it can put the new  users and passwords onto the database.
	if(isset($_POST["username"])){
	$new_user = mysqli_real_escape_string($connect, ($_POST["username"]));
		$new_pass = $_POST["password"];
			

        // $query = "SELECT * FROM c9 WHERE Username=$new_user ";
        $hashed = hash('sha512', $new_pass);
		$insert = "INSERT INTO tutor(Username, Password)
				   VALUES ('$new_user', '$hashed' )";
          $results = mysqli_query($connect, $insert);
		if($results){
		session_destroy();
		header("Location: login.php");
		}
			}
?>


<html>
<head>

    <meta charset="utf-8">
<link rel="stylesheet" a href="css/log.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Sign up </title>
</head>
<body>
	<ul>

	 <li style="float:right" ><a href="FAQ.html">FAQ</a></li>

	<li><a href="sign_up.php">Register </a></li>
	    <li><a href="login.php">Log In</a></li>
	    <li  ><a href="index.php">Home</a></li>


	</ul>
      <div id= "container">
      <h1 id= "logtitle"> Sign Up  </h1>


	<div id="form">
				 	<form action="sign_up.php" method="post">
					<table>
						<tr>
							<td align= "right">
								Username:
							</td>
							<td>
								<input size="20px" size="20px" maxlengh="15" type="text" name="username" id="user" required>
                                <div id = "um"></div>
							</td>
						</tr>
            
						<tr>
							<td align = "right">
								Password:
							</td>
							<td>
								<input size="20px" type="password" size="20px" maxlengh="15" name="password">&nbsp;

							</td>

						</tr>
						 <td colspan= "2" align="left"><input type="submit" value="Sign up"></td>
					</div>


		</div>
	</div>
	</body>
   <script> 
 
        $('#user').keyup(function()
                         {
        var users =$('#user').val();
       //$('#um').html('<img src="load.gif"> ');
        
        if(users!='')
            {
                $.post('checking.php', {username:users},
                function(data)
                {
                    $('#um').html(data);
                    
                });
            }
            else
                {
                    $('#um').html('');
                }
        });
       
    </script>
</html>