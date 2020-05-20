<?php
<<<<<<< HEAD
require 'php/sig_up.php';
 $connect = mysqli_connect("localhost", "root", "root","c9");
 $query =  'SELECT * FROM  tutor ORDER BY Username ASC ';
  $result = mysqli_query($connect,$query);
=======
	$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
   //When the user has been created,it wil be put onto the database, so new users can look onto the website, it will also connects  to 			     the database so it can put the new  users and passwords onto the database.
	if(isset($_POST["username"])){
	$new_user = mysqli_real_escape_string($connect, ($_POST["username"]));
		$new_pass = $_POST["password"];

        // $query = "SELECT * FROM c9 WHERE Username=$new_user ";
        $hashed = hash('sha512', $new_pass);
		$insert = "INSERT INTO Users(Username, Password)
				   VALUES ('$new_user', '$hashed' )";
          $results = mysqli_query($connect, $insert);
		if($results){
		session_destroy();
		header("Location: login.php");
		}
			}
>>>>>>> parent of b50c7b2... working version so far
?>


<html>
<head>

    <meta charset="utf-8">
<link rel="stylesheet" a href="css/log.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Sign up </title>
</head>
<body>
<<<<<<< HEAD
<?php require 'header.php' ?>
 
	<div class= "container">
	  <div class="row">
          <h1 class="col-xs-12"> Sign Up  </h1>
        </div>
            </div>

        <div class="container">
         <div class="row">
          <div class=" LoginBoxContainer col-xs-12 col-md-6">
        
                         <form action="sign_up.php" method="post">
                            <fieldset>
                             
                            <div>
                                <label>First Name</label>  
                                    <input size ="17" type= "text"  class="Medium Text form-control"  size"20" maxlengh= "15" name="Firstname"> 
                                   </div>


                                   <div>
                                <label>Last Name</label>  
                                    
                                        <input size ="17" type= "text" class="form-control" size"20" maxlengh= "15" name="Lastname"> 
                                   </div>
 
                                    <div>
                                   
			<label>Username:</label>
			<input name="username" type="text" id="username" class="form-control" onBlur="checkAvailability()"><span id="user-availability-status"></span>    
	                
                                   </div>
                                    <div>
                                   <label> Password </label> 
                                    <input size ="17" type= "password" size"20" maxlengh= "15" name="password" class="form-control">
                                    
                                    <label> Confirm Password </label> 
                                    <input size ="17" type= "password" size"20" maxlengh= "15" name="password2" class="form-control"> 
                                     </div>
                                     <div>
                                     <div>
                                      <label>Institution </label>
                                      </div>
                                     <select  name="University">
                                    <option size= "" type="text" class=" text form-control" value="University Plymouth">University Plymouth  </option>
                                    <option size= "" type="text" class=" text form-control"   value="University Exeter"> University of Exeter  </option>
                                    <option size= "" type="text" class=" text form-control" value="City College Plymouth">City College Plymouth  </option>
                                    <option size= "" type="text" class=" text form-control"   value="Plymouth College of Art"> Plymouth College of Art  </option>
                                    <option size= "" type="text" class=" text form-control" value="duchy collegeh">duchy college </option>
                                  
                                     </select>
                                    </div>
                                    <div>
                                    <div>
                                    <label> Dsa Tutor </label>
                                    </div>
                                    <select  name="dsaTutor">
                                         <?php 
                                       while ($row = mysqli_fetch_array($result) )
                                        {
                                           echo'  <option size= "" type="text" class=" text form-control" value="'.$row['Username'].'">'.$row['Username'].'</option>';
                                        }
                                        ?>
                                 
                                    </select>
                                     </div>
                                     <div>
                                    <label> Studying</label>
                                    <input size= "" type="text" class=" text form-control" name="Study">
                                     </div>
                                    <div class="next loginbutton">
                                        <input type="submit" value="Sign up" class="btn btn-default  btn-primary form-control" id="disable"> 
                                     </div>
                                   
                                     </fieldset>
                              </form>
    
				</div>
            </div>
        </div>
=======
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
      <p id= "titles"> Sign Up  </h1>


	<div id="form">
				 	<form action="sign_up.php" method="post">
					<table>
						<tr>
							<td align= "right">
								Username:
							</td>
							<td>
								<input size="20px" size="20px" maxlengh="15" type="text" name="username" id="user" required>
								<div id = "list" class = "list"></div>

							</td>
						</tr>

						<tr>
							<td align = "right">
								Password:
							</td>
							<td>
								<input size="20px" type="password" size="20px" maxlengh="15" name="password" >&nbsp;

							</td>

						</tr>
						 <td colspan= "2" align="left"><input type="submit" value="Sign up" id = "btn"></td>
					</div>


		</div>
	</div>
>>>>>>> parent of b50c7b2... working version so far
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
									if("<p> sorry username taken </p>")
									{

										//if sorry username is true then disable the button.
									//	$('#btn').attr("disabled",true);
									}
                    $('#list').html(data);
									//	$('#btn').attr("disable", false);

                });
            }
            else
                {
                    $('#list').html('');
                }
        });

    </script>
</html>
