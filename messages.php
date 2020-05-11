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
	      				<p class="Main"><b> <?php echo $_SESSION['username']; ?></b></p>
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
	       	         	<p class="Mains "><b><?php echo $user_sender; ?> </b></p>
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
			<div class="col-md-2">
			</div>
			<div class=" col-12 col-md-10">
				<form method="post" id = "msgbox">
					<input type= "text" class="minputs" name="nmesss" id = "minputs" placeholder="write the message">
					<input type="submit" name="submit" value="Send"  class= "btn-primary">
				</form>
											</div>
	  			</div>
							</div>
										</div>
										 </div>
							</div>
</body>
<script>
$("document").ready(function(event) 
{
	//now if the fomr is sumbitted 
	$("#rightside").on('submit', 'msg', function(){
		//take the data from input 
   var message_text = $("minput").val();
		//post it to sned.php 
   $.post("send.php?user=<?php echo$_GET['user']?>",
   { text:message_text,
	
   },
   function(data,status)
   {
	   alert(data);
   }
	
	});
	$("#rightside").keypress(function(e))
	{
				 //sumbits when enter is only pressed 
     if(e.keyCode ==13 && !e.shiftKey)
	 {
		 $("msgbox").submit();

	 }
	}
});
</script>
</html>
