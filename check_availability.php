
	
<?php
 
 $con =mysqli_connect('localhost','root','root','c9');
 if(!$con){
    die("Failed to connect:" . mysqli_connect_error());
 } 
 if(isset($_POST['type']) == 1){
     $username =$_POST['username'];
      $query ="SELECT * FROM users where Username ='".$username."' ";
     $result =mysqli_query($con, $query);
     $rowcount=mysqli_num_rows($result);
     if($rowcount >0){
         echo "<span class='status-not-available'> Username Not Available.</span>";
        echo '<script>
        $(document).ready(function(e) {
            $("#disable").css("visibility", "hidden");
        
       }); 
 
    </script>';
 
     }else{
          echo "<span class='status-available'> Username Available.</span>";
     }
 }
?>