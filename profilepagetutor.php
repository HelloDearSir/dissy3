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
					<div class= "container">
					  <div class="row">
			   				<div class= "col-sm-3">
											 
							   <h3>Useful Links </h3>
						 	 
									<ul>
								
									<li class="ButtonPAdding">  <a href='#' class = "btn btn-primary form-control"> Plymouth University</a></li>
											<li class="ButtonPAdding">	<a href='https://dle.plymouth.ac.uk' class="btn btn-primary form-control">DLE</a></li>
											<li class="ButtonPAdding">	<a href='https://www.fotpms.plymouth.ac.uk/SPMS/' class="btn btn-primary form-control">SPMS</a></li>
										<li class="ButtonPAdding">	<a href='https://outlook.office.com/owa/?wa=wsignin1.0' class="btn btn-primary form-control">University Email</a></li>
												<li class="ButtonPAdding"><a href='books.php' class="btn btn-primary form-control">See booking</a></li>
												<li class="ButtonPAdding"><a href='Students.php' class="btn btn-primary form-control"> Students</a></li>		
											 		 
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
        <table class= "table">
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
							<td class = "delete"> <a href="profilepage.php?del_task=<?php echo $row['id'];?>"> X</a></td>
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
