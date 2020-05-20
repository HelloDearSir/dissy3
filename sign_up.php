<?php
require 'php/sig_up.php';
 $connect = mysqli_connect("localhost", "root", "root","c9");
 $query =  'SELECT * FROM  tutor ORDER BY Username ASC ';
  $result = mysqli_query($connect,$query);
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
	</body>
   
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
</html>