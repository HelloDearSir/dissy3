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
<<<<<<< HEAD
<?php require  'meta.php' ?>
    <body>
	<?php require  'headerlogin.php' ?>
=======
<<<<<<< HEAD
<?php require  'meta.php' ?>
    <body>
	<?php require  'headerlogin.php' ?>
=======
    <head>
        <title>test2.php</title>
        <!-- <link rel="stylesheet" href="css/booking.css"> -->
				 
		 <meta charset="utf-8">
        		<script src="main.js"></script>
				<meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    </head>
    <body>
			 
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8


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
<<<<<<< HEAD
								$query= 'SELECT * FROM  `users` WHERE `dsaTutor`= "'.$_SESSION['username'].'"';
=======
<<<<<<< HEAD
								$query= 'SELECT * FROM  `users` WHERE `dsaTutor`= "'.$_SESSION['username'].'"';
=======
								$query= 'SELECT * FROM  `users` WHERE `dsaTutor`= "'.$_SESSION['Username'].'"';
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
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
<<<<<<< HEAD
												if($tutor == $_SESSION['username'])
=======
<<<<<<< HEAD
												if($tutor == $_SESSION['username'])
=======
												if($tutor == $_SESSION['Username'])
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
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
