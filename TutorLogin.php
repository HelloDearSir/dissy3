<?php

require 'php/tutorlog.php';

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
<p> If you are a tutor and don't have a log in please <a href="TutorSign_up.php"> Sign up</a>
<a class= "btn btn-default btn-primary form-control" href="TutorSign_up.php">Sign up</a>


    </div>
     </div>
        </div>
</div>







</body>

</html>

