<?php
$db = mysqli_connect("localhost", "root", "root", "c9")or die("summut gungan rong");

if(isset($_POST['username']))
    
{
    //protects the php from any sql injections 
    $username = mysqli_real_escape_string($db, ($_POST["username"]));
    if(!empty($username))
    {
        $query ="SELECT * FROM users WHERE Username ='$username'";
      $results = mysqli_query($db, $query);
        
  

        if($results ->num_rows == 0)
        {
                
            echo "<span class='status-available'> Username Available.</span>";
            echo "<script type='text/javascript'>
            $('#disable').css('visibility', 'visible') </script>";
        }
        else 
        {
            echo "<span class='status-not-available'> Username Not Available.</span>";
            echo "<script type='text/javascript'>
                       $('#disable').css('visibility', 'hidden') </script>";
        }
    }
}
