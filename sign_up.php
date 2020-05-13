<?php
<<<<<<< HEAD
require 'php/sig_up.php';
=======
require 'php/sig_upcopy.php';
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36

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
<<<<<<< HEAD
                                   
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
=======
                                      <label>Username</label>  
                                    
                                        <input size ="17" type= "text" class="form-control" size"20" maxlengh= "15" name="username"> 
                                   </div>
                                    <div>
                                   <label> Password </label> 
                                    <input size ="17" type= "password" size"20" maxlengh= "15" name="password" class="form-control"> 
                                     </div>
                                     <div>
                                      <label>Institution </label>
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
                                     <select  name="University">
                                    <option size= "" type="text" class=" text form-control" value="University Plymouth">University Plymouth  </option>
                                    <option size= "" type="text" class=" text form-control"   value="University Exeter"> University of Exeter  </option>
                                    <option size= "" type="text" class=" text form-control" value="City College Plymouth">City College Plymouth  </option>
                                    <option size= "" type="text" class=" text form-control"   value="Plymouth College of Art"> Plymouth College of Art  </option>
                                    <option size= "" type="text" class=" text form-control" value="duchy collegeh">duchy college </option>
                                  
                                     </select>
                                    </div>
                                    <div>
<<<<<<< HEAD
                                    <div>
                                    <label> Dsa Tutor </label>
                                    </div>
                                    <select  name="dsaTutor">
                                    <option size= "" type="text" class=" text form-control" value="Micky_Rowe">Micky_Rowe </option>
                                    <option size= "" type="text" class=" text form-control"   value="John_Doe"> John_Doe </option>
                                    <option size= "" type="text" class=" text form-control" value="Jed_Bob">Jed_Bob </option>
                                    <option size= "" type="text" class=" text form-control"   value="Gregg_Poe">Gregg_Poe  </option>
                                    <option size= "" type="text" class=" text form-control" value="duchy collegeh">duchy college </option>
                                    </select>
=======
                                    <label> Dsa Tutor </label>
                                    <option size= "" type="text" class=" text form-control" value="Micky_Rowe">Micky_Rowe </option>
                                    <option size= "" type="text" class=" text form-control"   value="John_Doe"> John_Doe </option>
                                    <option size= "" type="text" class=" text form-control" value="Jed_Bob">Jed_Bob </option>
                                    <option size= "" type="text" class=" text form-control"   value="Gregg_Poe"> Plymouth College of Art  </option>
                                    <option size= "" type="text" class=" text form-control" value="duchy collegeh">duchy college </option>
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
                                     </div>
                                     <div>
                                    <label> Studying</label>
                                    <input size= "" type="text" class=" text form-control" name="Study">
                                     </div>
                                    <div class="next loginbutton">
<<<<<<< HEAD
                                        <input type="submit" value="Sign up" class="btn btn-default  btn-primary form-control" id="disable"> 
=======
                                        <input type="submit" value="Sign up" class="btn btn-default  btn-primary form-control"> 
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
                                     </div>
                                   
                                     </fieldset>
                              </form>
    
				</div>
            </div>
        </div>
	</body>
<<<<<<< HEAD
   
<script type="text/javascript">
function checkAvailability(){
  
	$("#loaderIcon").show();
	
	$.ajax({
		type:"POST",
		url:"check_availability.php",
		cache:false,
		data:{
			type:1,
			username:$("#username").val(),
		},
		success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide(1000);
		}
	});
  
}
</script>
=======
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
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
</html>
