<?php
 
 $connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
//select from tasks db where student = session cookie
	$query= 'SELECT * FROM  `tutor` WHERE `Username`= "'.$_SESSION['username'].'"';
	$results = mysqli_query($connect, $query);
		if ($results)
			{ //if the query is uccessful then do this.
				while ($row = mysqli_fetch_array($results))
				{
					$tutor= $row['Username'];
				
					if($tutor == $_SESSION['username'])
					{ ?>
					 
							<li class="ButtonPAdding">	<a href='https://dle.plymouth.ac.uk' class="btn btn-primary form-control">DLE</a></li>
							<li class="ButtonPAdding">	<a href='https://outlook.office.com/owa/?wa=wsignin1.0' class="btn btn-primary form-control">University Email</a></li>
							<li class="ButtonPAdding"><a href='books.php' class="btn btn-primary form-control">See booking</a></li>
							<li class="ButtonPAdding"><a href='Students.php' class="btn btn-primary form-control"> Students</a></li>		
						<?php // opening a second php tag allows me to display them into the tr tag which is rows.
 						}
    			}
      }
?>   
 <?php
 
 $connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
//select from tasks db where student = session cookie
	$query= 'SELECT * FROM  `users` WHERE `Username`= "'.$_SESSION['username'].'"';
	$results = mysqli_query($connect, $query);
		if ($results)
			{ //if the query is uccessful then do this.
				while ($row = mysqli_fetch_array($results))
				{
					$Students= $row['Username'];
				
					if($Students == $_SESSION['username'])
					{ ?>
					   <li class="ButtonPAdding">  <a href='#' class = "btn btn-primary form-control"> Plymouth University</a></li>
											<li class="ButtonPAdding">	<a href='https://dle.plymouth.ac.uk' class="btn btn-primary form-control">DLE</a></li>
											<li class="ButtonPAdding">	<a href='https://www.fotpms.plymouth.ac.uk/SPMS/' class="btn btn-primary form-control">SPMS</a></li>
										<li class="ButtonPAdding">	<a href='https://outlook.office.com/owa/?wa=wsignin1.0' class="btn btn-primary form-control">University Email</a></li>
												<li class="ButtonPAdding"><a href='Sessions.php' class="btn btn-primary form-control"> Appointments</a></li>	
						<?php // opening a second php tag allows me to display them into the tr tag which is rows.
 						}
    			}
      }
?>   