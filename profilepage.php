<?php
session_start();
if($_SESSION['login'] != "That GRRRRREAT") {
	header('Location: login.php');
	exit();
} else {
	$username = $_SESSION['Username'];
}
?>



<!DOCTYPE html>
<html lang="en-GB">
<?php require  'meta.php' ?>
    <body>
	<?php require  'headerlogin.php' ?>
					<div class= "container">
					  <div class="row">
			   				<div class= "col-sm-3">
											 
							   <h3>Useful Links </h3>
						 	 
									<ul>
								
									<li class="ButtonPAdding">  <a href='#' class = "btn btn-primary form-control"> Plymouth University</a></li>
											<li class="ButtonPAdding">	<a href='https://dle.plymouth.ac.uk' class="btn btn-primary form-control">DLE</a></li>
											<li class="ButtonPAdding">	<a href='https://www.fotpms.plymouth.ac.uk/SPMS/' class="btn btn-primary form-control">SPMS</a></li>
										<li class="ButtonPAdding">	<a href='https://outlook.office.com/owa/?wa=wsignin1.0' class="btn btn-primary form-control">University Email</a></li>
												<li class="ButtonPAdding"><a href='Sessions.php' class="btn btn-primary form-control"> Appointments</a></li>											 
									</ul>
								</div>
        <div class= "col-sm-9">
  

			<div class= "container">
			 <div class= "row">
				<h1> To do List  </h1>
			 </div>
			 </div>
        <form method="post" action="profilepage.php">
         <div class="container"> 
		  <div class="row">
		  <div class="Paddingfam">
            <input type="text" name="task" class="tasks">
            <button type="submit" class=" btn-primary" name="submit">Add the task</button>
			   </div>
            </div>
		</div>	 
        </form>
		<div class="container">
		 <div class= "row">
<<<<<<< HEAD
        <table class= "table tablez">
=======
        <table class= "table">
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
            <thead>
                <tr>

                 
                    <th class="taskz">Tasks</th>
                    <th class ="done">Done</th>
                    
                </tr>
            </thead>
            <tbody>
<?php
require 'tasks.php';
require 'connection.php';
//select from tasks db where student = session cookie
	$query= 'SELECT * FROM  `tasks` WHERE `student`= "'.$_SESSION['Username'].'"';
	$results = mysqli_query($connect, $query);
		if ($results)
			{ //if the query is uccessful then do this.
				while ($row = mysqli_fetch_assoc($results))
				{
					$student= $row['student'];
					$task= $row['task'];
					if($student == $_SESSION['Username'])
					{ ?>
<<<<<<< HEAD
						<tr class="tables">

							<td class= "task tasksnames"> <?php echo $task; ?></td>
							<td class = "delete taskdelete"> <a href="profilepage.php?del_task=<?php echo $row['id'];?>"> X</a></td>
=======
						<tr>
							<td class= "task"> <?php echo $task; ?></td>
							<td class = "delete"> <a href="profilepage.php?del_task=<?php echo $row['id'];?>"> X</a></td>
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
									</tr>
						<?php // opening a second php tag allows me to display them into the tr tag which is rows.
 						}
    			}
      }
?>
     </div>
	</div> 
        </table>
    </div>  
</div>		
    </body>
</html>
