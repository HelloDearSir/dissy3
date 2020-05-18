<?php
	$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
   //When the user has been created,it wil be put onto the database, so new users can look onto the website, it will also connects  to 			     the database so it can put the new  users and passwords onto the database.
	if(isset($_POST["username"])){
	$new_user = mysqli_real_escape_string($connect, ($_POST["username"]));
		$new_pass = $_POST["password"];
			

        // $query = "SELECT * FROM c9 WHERE Username=$new_user ";
        
		$insert = "INSERT INTO tutor(Username, Password)
				   VALUES ('$new_user', '$new_pass' )";
          $results = mysqli_query($connect, $insert);
		if($results){
		session_destroy();
		header("Location: login.php");
		}
			}
?>

<!doctype html>
<html>
 
<?php require 'meta.php' ?>
  
<body>
<?php require 'header.php' ?>
 
	<div class= "container">
	  <div class="row">
          <h1 class="col-xs-12"> Sign Up  </h1>
        </div>
            </div>

        <div class="container">
         <div class="row">
          <div class=" LoginBoxContainer col-xs-12 col-md-6">
		  <form action="sign_upTutor.php" method="post">
                            <fieldset>
                             
	 
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