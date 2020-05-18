<?php
session_start();
if($_SESSION['login'] != "That GRRRRREAT") {
	header('Location: login.php');
	exit();
} else {
<<<<<<< HEAD
	$username = $_SESSION['username'];
=======
<<<<<<< HEAD
	$username = $_SESSION['username'];
=======
	$username = $_SESSION['Username'];
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
}
?>

<!DOCTYPE html>
<html lang="en-GB">
<?php require 'meta.php' ?>
  
  <body>
  <?php require 'headerlogin.php' ?>
    <div class="container">
     <div class="row">


        <div class="heading">
            <h2> booking</h2>
        </div>
         <div class="container">
          <div class="row">
        <input size="20px" size="20px" maxlengh="15" type="text" name="username" id="user" required>
                                <div id = "filter"></div>
                                </div>
                                </div>
<<<<<<< HEAD
        <table class="table SessionTable">
=======
<<<<<<< HEAD
        <table class="table SessionTable">
=======
        <table class="table">
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
                    <th>Time Start </th>
                    <th>&nbsp;</th>
                    <th>Time End</th> 
                    <th>&nbsp;</th>
                    <th>Date  </th>
										<th>&nbsp;</th>
                    <th>Status  </th>
										<th>&nbsp;</th>
                    <th>Tutor  </th>
<<<<<<< HEAD
=======
=======
                    <th>Time </th>
                    <th>&nbsp;</th>
										<th>Date  </th>
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
										<th>&nbsp;</th>
							
                </tr>
            </thead>
            <tbody>
							<?php
						
							require 'connection.php';
							//select from tasks db where student = session cookie
<<<<<<< HEAD
								$query= 'SELECT * FROM  `booking` WHERE `StudentUser`= "'.$_SESSION['username'].'"';
=======
<<<<<<< HEAD
								$query= 'SELECT * FROM  `booking` WHERE `StudentUser`= "'.$_SESSION['username'].'"';
=======
								$query= 'SELECT * FROM  `booking` WHERE `StudentUser`= "'.$_SESSION['Username'].'"';
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
								$results = mysqli_query($connect, $query);
									if ($results)
										{ //if the query is uccessful then do this.
											while ($row = mysqli_fetch_assoc($results))
											{
<<<<<<< HEAD
                        
=======
<<<<<<< HEAD
                        
=======
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
												$tutor= $row['StudentUser'];
												$fn= $row['First'];
												$ln = $row['Last'];
												$meetplace = $row['location'];
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
                        $time = $row['time'];
                        $timeEnds =$row['timends'];
												$date = $row['bookingd'];
                        $phonen = $row['Phone'];
                        $TutorStatus =$row['status'];
                        $Tutors = $row['tutor'];
												if($tutor == $_SESSION['username'])
<<<<<<< HEAD
=======
=======
												$time = $row['time'];
												$date = $row['bookingd'];
												$phonen = $row['Phone'];
												if($tutor == $_SESSION['Username'])
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
                            <td class="task""><?php echo $timeEnds;?> </td>
                            <td>&nbsp; </td>
														<td class = "task"><?php echo $date;?> </td>
														<td> &nbsp;</tb>
                            <td class = "task"><?php echo $TutorStatus;?> </td>
														<td> &nbsp;</tb>
                            <td class = "task"><?php echo $Tutors;?> </td>
														<td> &nbsp;</tb>
<<<<<<< HEAD
=======
=======
														<td class = "task"><?php echo $date;?> </td>
														<td> &nbsp;</tb>
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8

														 
 
             </tr>


             <?php }
           }
              } ?>
            </tbody>


        </table>
      </div>
     </div> 
    </div>  
    </body>
 </html>