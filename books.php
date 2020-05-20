
<?php  include('Updating.php'); ?>
<?php
    session_start();
    if($_SESSION['login'] != "That GRRRRREAT")

{
  exit(header('Location: login.php'));
 
          }

?>
<?php 
 

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM booking WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$status = $n['status'];
            $locations = $n['location'];
            $timeStart = $n['time'];
            $timeEnd = $n['timends'];
            $fn= $n['First'];
            $phonen = $n['Phone'];
            $ln = $n['Last'];
		}
    } 
?>

<!DOCTYPE html>
<html lang="en-GB">
 <style> 

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
 </style>
<?php require 'meta.php' ?>
  
<body>
<?php require 'headerlogin.php' ?>
<div class="container">
     <div class="row">
        <div class="heading">
            <h2> Booking</h2>
        </div>

<?php require 'update.php' ?>
    

<?php $results = mysqli_query($db, "SELECT * FROM booking"); ?>
<table class="table SessionTable">
<thead>
                <tr>
                    <th>First Name </th>
                    <th>&nbsp;</th>
                    <th>Last Name </th>
                    <th>&nbsp;</th>
                    <th>Phone Number</th>
                    <th>&nbsp;</th>
                    <th> Location </th>
                    <th>&nbsp;</th>
                    <th>Time Start </th>
                    <th>&nbsp;</th>
                    <th>Time End</th> 
                    <th>&nbsp;</th>
                    <th>Date  </th>
					<th>&nbsp;</th>
                    <th>Status  </th>
					<th>&nbsp;</th>
                    <th> Action </th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
    <tbody>
    <?php
    		require 'booking.php';
            require 'connection.php';
            
            //select from tasks db where student = session cookie
                $query= 'SELECT * FROM  `booking` WHERE `tutor`= "'.$_SESSION['username'].'"';
                $results = mysqli_query($connect, $query);
                    if ($results)
                        { //if the query is uccessful then do this.
                            while ($row = mysqli_fetch_assoc($results))
                            {
        
                                $tutor= $row['tutor'];
                                $fn= $row['First'];
                                $ln = $row['Last'];
                                $meetplace = $row['location'];
                                 $time = $row['time'];
                                 $timeEnds =$row['timends'];
                                $date = $row['bookingd'];
                                 $phonen = $row['Phone'];
                               
                                 $id = $row['id'];
                                if($tutor == $_SESSION['username'])
                                { ?>
                                    <tr>
                                        <td class= "task"> <?php echo $fn; ?></td>
                                            <td>&nbsp;</td>
                                        <td class= "task"> <?php echo $ln; ?></td>
                                        <td>&nbsp;</td>
                                        <td class = "task"> <?php echo $phonen;?> </td>
                                        <td>&nbsp;</td>
                                        <td class = "task"><?php echo $meetplace;?></td>
                                        <td>&nbsp;</td>
                                        <td class = "task"> <?php echo $time;?> </td>
                                        <td>&nbsp;</td>
                                        <td class="task"><?php echo $timeEnds;?> </td>
                                        <td>&nbsp; </td>
                                        <td class = "task"><?php echo $date;?> </td>
                                        <td> &nbsp;</tb>
                                        <td class = "task" name="Statuez">  <?php echo $row['status']?><td>
                                        <td class="update" id ="tick"  name="update"><a href="books.php?edit=<?php echo $row['id'];?>"> &#9989;</a></td>
                                        <td class = "delete"> <a href="books.php?del_task=<?php echo $row['id'];?>"> X</a></td>
                                    </tr>
                                        <?php }
                                                }
                                                 } ?>
                                                  </tbody>
                                                    </table>
                                                     </div>
                                                       </div>
                                                        </body>
</html>

<script> 
$(document).ready(function(){
$(".input-group").css("display","none");
 


$(".update").click(function() {
    $(".UpdatingForm").css("display", "block");
    $(".input-group").css("display","block");
    });

    
$(".close").click(function() {
    $(".UpdatingForm").css("display", "none");
    $(".input-group").css("display","none");
    });

});




</script>