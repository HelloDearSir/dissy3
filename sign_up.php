<?php
require 'php/sig_upcopy.php';

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
                                      <label>Username</label>  
                                    
                                        <input size ="17" type= "text" class="form-control" size"20" maxlengh= "15" name="username"> 
                                   </div>
                                    <div>
                                   <label> Password </label> 
                                    <input size ="17" type= "password" size"20" maxlengh= "15" name="password" class="form-control"> 
                                     </div>
                                     <div>
                                      <label>Institution </label>
                                     <select  name="University">
                                    <option size= "" type="text" class=" text form-control" value="University Plymouth">University Plymouth  </option>
                                    <option size= "" type="text" class=" text form-control"   value="University Exeter"> University of Exeter  </option>
                                    <option size= "" type="text" class=" text form-control" value="City College Plymouth">City College Plymouth  </option>
                                    <option size= "" type="text" class=" text form-control"   value="Plymouth College of Art"> Plymouth College of Art  </option>
                                    <option size= "" type="text" class=" text form-control" value="duchy collegeh">duchy college </option>
                                  
                                     </select>
                                    </div>
                                    <div>
                                    <label> Dsa Tutor </label>
                                    <option size= "" type="text" class=" text form-control" value="Micky_Rowe">Micky_Rowe </option>
                                    <option size= "" type="text" class=" text form-control"   value="John_Doe"> John_Doe </option>
                                    <option size= "" type="text" class=" text form-control" value="Jed_Bob">Jed_Bob </option>
                                    <option size= "" type="text" class=" text form-control"   value="Gregg_Poe"> Plymouth College of Art  </option>
                                    <option size= "" type="text" class=" text form-control" value="duchy collegeh">duchy college </option>
                                     </div>
                                     <div>
                                    <label> Studying</label>
                                    <input size= "" type="text" class=" text form-control" name="Study">
                                     </div>
                                    <div class="next loginbutton">
                                        <input type="submit" value="Sign up" class="btn btn-default  btn-primary form-control"> 
                                     </div>
                                   
                                     </fieldset>
                              </form>
    
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
