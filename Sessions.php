<?php
session_start();
if($_SESSION['login'] != "That GRRRRREAT") {
	header('Location: login.php');
	exit();
} else {
	$username = $_SESSION['username'];
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
                    <th>Tutor  </th>
										<th>&nbsp;</th>
							
                </tr>
            </thead>
            <tbody>
							<?php
						
							require 'connection.php';
							//select from tasks db where student = session cookie
								$query= 'SELECT * FROM  `booking` WHERE `StudentUser`= "'.$_SESSION['username'].'"';
								$results = mysqli_query($connect, $query);
									if ($results)
										{ //if the query is uccessful then do this.
											while ($row = mysqli_fetch_assoc($results))
											{
                        
												$tutor= $row['StudentUser'];
												$fn= $row['First'];
												$ln = $row['Last'];
												$meetplace = $row['location'];
                        $time = $row['time'];
                        $timeEnds =$row['timends'];
												$date = $row['bookingd'];
                        $phonen = $row['Phone'];
                        $TutorStatus =$row['status'];
                        $Tutors = $row['tutor'];
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
                            <td class="task""><?php echo $timeEnds;?> </td>
                            <td>&nbsp; </td>
														<td class = "task"><?php echo $date;?> </td>
														<td> &nbsp;</tb>
                            <td class = "task"><?php echo $TutorStatus;?> </td>
														<td> &nbsp;</tb>
                            <td class = "task"><?php echo $Tutors;?> </td>
														<td> &nbsp;</tb>

														 
 
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