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
<html>
	<head>
	<?php require 'meta.php' ?>
    <?php require 'headerlogin.php'?>
  
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
 <meta charset="utf-8">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="main.js"></script>

 

	</head>
	<body>

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
					$query= 'SELECT * FROM  `chat` WHERE `messager`= "'.$_SESSION['username'].'"
					AND `messagee` ="'.$_GET['user'].'"
					OR `messager` = "'.$_GET['user'].'"
					AND `messagee` = "'.$_SESSION['username'].'" ';
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
	  					if($user_sender == $_SESSION['username'])
	  					{ ?>
	    				<div class="users">
	      				<p> <?php echo $_SESSION['username']; ?></p>
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
		    
			<div class="col-md-2">
			</div>
			<div class=" col-12 col-md-10">
				<form method="post" id="messagebox" >  
				<textarea class="textarea" id="textarea" placeholder= "Write your message"></textarea>
											</div>
	  			</div>
							</div>
										</div>
										 </div>
							</div>
</body>
 
</html>
<script>
$("document").ready(function(event) 
{
	//now if the fomr is sumbitted 
	$("#messagebox").on('submit', function(event){
		event.preventDefault();
    
		//take the data from input
		var message_text = $("#textarea").val();
		//post it to sned.php
		$.post("send.php?user=<?php echo $_GET['user']?>",
   { text:message_text,
	
   },
    function(data,status) {
			alert(data);
			$("#message_text").val("");
			document.getElementById("mainmessages").innerhtml += data;
			
			// refresh page
			location.reload();
		});
	});
	$("#rightside").keypress(function(e)
	{

				 //sumbits when enter is only pressed 
     if(e.keyCode == 13 && !e.shiftKey)
	 {
		 
		$("#messagebox").submit();
	

	 }

	});
});
</script>