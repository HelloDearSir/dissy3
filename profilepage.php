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
    <head>
        <title>test2.php</title>
        <link rel="stylesheet" href="css/uplaod1.css">
				<meta content="width=device-width, initial-scale=1" name="viewport" />
		 <meta charset="utf-8">
    </head>
    <body>
<<<<<<< HEAD
	<?php require  'headerlogin.php' ?>
  

					<div class= "container">
					  <div class="row">
			   				<div class= "col-sm-3">
											 
							   <h3>Useful Links </h3>
							   
									<ul>
									<?php require  'sidelinks.php' ?>     
     					</ul>     
		</div>
							 
        <div class= "col-sm-9">
  
=======
			<div id ="nav">
				<label for="toggle">&#9776;</label>
				<input type="checkbox" id="toggle">
				<div class = "menu">
					<a href="profilepage.php"><?php  echo $_SESSION['Username']; ?> </a>
						<a href="messages.php">Messages  </a>
							<a href="book.php">Booking</a>
							<a href="logout.php"> Log Out </a>
									</div>
												</div>
											 <div id = "links">
									 <p>UseFul links </p>
									<ul>
									<li class = "dropdown">  <a href='#' class = "down"> Plymouth University</a>
												<a href='https://dle.plymouth.ac.uk'>DLE</a>
												<a href='https://www.fotpms.plymouth.ac.uk/SPMS/'>SPMS</a>
											<a href='https://outlook.office.com/owa/?wa=wsignin1.0'>University Email</a>
												<a href='books.php'>See booking</a>
																									 </li>
									</ul>
        <div id= "container">
>>>>>>> parent of b50c7b2... working version so far


        <div class="heading">
            <h2> To do list</h2>
        </div>
        <form method="post" action="profilepage.php">

            <input type="text" name="task" class="tasks" />
            <button type="submit" class="buttons" name="submit">Add the task</button>

        </form>
        <table>
            <thead>
                <tr>

                    <th>&nbsp;</th>
                    <th class="taskz">Tasks</th>
                    <th class ="done">Done</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
<?php
require 'tasks.php';
require 'connection.php';
//select from tasks db where student = session cookie
	$query= 'SELECT * FROM  `tasks` WHERE `student`= "'.$_SESSION['username'].'"';
	$results = mysqli_query($connect, $query);
		if ($results)
			{ //if the query is uccessful then do this.
				while ($row = mysqli_fetch_assoc($results))
				{
					$student= $row['student'];
					$task= $row['task'];
					if($student == $_SESSION['username'])
					{ ?>
						<tr>
							<td class= "task"> <?php echo $task; ?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td class = "delete"> <a href="profilepage.php?del_task=<?php echo $row['id'];?>"> X</a></td>
									</tr>
						<?php // opening a second php tag allows me to display them into the tr tag which is rows.
 						}
    			}
      }
?>

        </table>
        </div>
    </body>
</html>