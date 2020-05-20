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
<?php require  'meta.php' ?>
    <body>
	<?php require  'headerlogin.php' ?>


        <div class="container">
            <h2 style="text-align:center"> Students</h2>
        </div>
         <div class="container">
          <div class="row">
        <table class="table">
            <thead>
                <tr>
               
                    <th>First Name </th>
                    <th>&nbsp;</th>
                    <th>Last Name </th>
                    <th>&nbsp;</th>
                    <th>Username</th>
                    <th>&nbsp;</th>
                    <th> University </th>
                    <th>&nbsp;</th>
                    <th>Studying </th>
                    <th>&nbsp;</th>
									 
                </tr>
            </thead>
            <tbody>
							<?php
						 
							require 'connection.php';
							//select from tasks db where student = session cookie
								$query= 'SELECT * FROM  `users` WHERE `dsaTutor`= "'.$_SESSION['username'].'"';
								$results = mysqli_query($connect, $query);
									if ($results)
										{ //if the query is uccessful then do this.
											while ($row = mysqli_fetch_assoc($results))
											{
												$tutor= $row['dsaTutor'];
												$FirstName= $row['Firstname'];
												$LastName= $row['Lastname'];
												$Usernames= $row['Username'];
												$University = $row['University'];
												 $TypeOfstudy =$row['Study'];
												if($tutor == $_SESSION['username'])
												{ ?>
													<tr>
													<td class= "task"> <?php echo $FirstName; ?></td>
															<td>&nbsp;</td>
															<td class= "task"> <?php echo $LastName; ?></td>
															<td>&nbsp;</td>
														<td class= "task"> <?php echo $Usernames; ?></td>
															<td>&nbsp;</td>
														<td class= "task"> <?php echo $University; ?></td>
														<td>&nbsp;</td>
														<td class= "task"> <?php echo $TypeOfstudy; ?></td>
														<td>&nbsp;</td>
													 
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
<script>
 
</html>