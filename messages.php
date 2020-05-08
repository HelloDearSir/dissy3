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
<html>
	<head>
	<?php require 'meta.php' ?>
  
 
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
 <meta charset="utf-8">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="main.js"></script>

	</head>
	<body>
  <?php require 'headerlogin.php' ?>
  <?php require 'newmessage.php' ?>
  <?php require 'LeftSide.php' ?>
 
		<div id="rightside">

	      		<div id="mainmessages">
	        <?php
	        		require_once 'message.php';
	        		require_once 'connection.php';
		          /*
	        selecting from the messages database with the varibles that have been created.
	        $_GET['user'] is header //('Location:profilepage.php?user='.$Ureciver);
	        every time user='.$Ureciver it would show each different message when the user has sent a new message to a user.

			*/
					$query= 'SELECT * FROM  `chat` WHERE `messager`= "'.$_SESSION['Username'].'"
					AND `messagee` ="'.$_GET['user'].'"
					OR `messager` = "'.$_GET['user'].'"
					AND `messagee` = "'.$_SESSION['Username'].'" ';
					$results = mysqli_query($connect, $query);
							if ($results)
								{ //if the query is successful then do this.
									while ($row = mysqli_fetch_assoc($results))
										{
	  
											//$user_sender = $row['messager'];, in the database.

	  // this will be the same through out the whole database..
	 							$user_sender= $row['messager'];
	  									$Ureciver= $row['messagee'];
	  									$message = $row['msg'];
	        //checking the sender is the user from the seesion.
	  					if($user_sender == $_SESSION['Username'])
	  					{ ?>
	    				<div class="users">
	      				<p> <?php echo $_SESSION['Username']; ?></p>
	      					<p> <?php echo $message ?></p>
	    						</div>
	    								<?php
	  											}
				else
	  				{
	            // showing the message in white, to the reciver.
	            // this echo will post the $message that that the sender has sent them.
	    												?>
	    			<div class="recivers">
	       	         	<p><?php echo $user_sender; ?> </p>
	       			<p><?php echo $message ?></p>
	     				</div>
	     					<?php
	  						}
								}
									}
	        						?>
		  </div> 
		   <div class="container">
		   <div class="row">
		     <?php require 'test.php' ?>
			<div class="col-md-3">
			</div>
			<div class=" col-12 col-md-9">
				<form method="post" id = "msgbox">
					<input type= "text" class="minputs" name="nmesss" id = "minputs" placeholder="write the message">
				</form>
											</div>
	  			</div>
							</div>
										</div>
										 </div>
							</div>
</body>

</html>
