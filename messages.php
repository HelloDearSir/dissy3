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
<<<<<<< HEAD
    <?php require 'headerlogin.php'?>
  
=======
<<<<<<< HEAD
    <?php require 'headerlogin.php'?>
  
=======
  
 
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
 <meta charset="utf-8">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="main.js"></script>

	</head>
	<body>
<<<<<<< HEAD

=======
<<<<<<< HEAD
 
=======
  <?php require 'headerlogin.php' ?>
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
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
<<<<<<< HEAD
												
=======
	  
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
											//$user_sender = $row['messager'];, in the database.

	  // this will be the same through out the whole database..
	 							$user_sender= $row['messager'];
	  									$Ureciver= $row['messagee'];
	  									$message = $row['msg'];
	        //checking the sender is the user from the seesion.
	  					if($user_sender == $_SESSION['username'])
	  					{ ?>
	    				<div class="users">
<<<<<<< HEAD
	      				<p> <?php echo $_SESSION['username']; ?></p>
=======
<<<<<<< HEAD
	      				<p> <?php echo $_SESSION['username']; ?></p>
=======
	      				<p class="Main"><b> <?php echo $_SESSION['username']; ?></b></p>
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
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
<<<<<<< HEAD
		    
			<div class="col-md-2">
			</div>
			<div class=" col-12 col-md-10">
				<form method="post" id="message-form" >  
				<input class="textarea" id="message_text" placeholder= "Write your message"/>
=======
		     <?php require 'test.php' ?>
			<div class="col-md-2">
			</div>
			<div class=" col-12 col-md-10">
				<form method="post" id = "msgbox">
					<input type= "text" class="minputs" name="nmesss" id = "minputs" placeholder="write the message">
					<input type="submit" name="submit" value="Send"  class= "btn-primary">
				</form>
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
											</div>
	  			</div>
							</div>
										</div>
										 </div>
							</div>
</body>
<<<<<<< HEAD
<script src="jquery-3.1.1.min.js"> </script>
<script>
$("document").ready(function(e) 
{
	//now if the fomr is sumbitted 
	$("#message-form").on('submit',  function(){
		//take the data from input 
   var message_text = $("#message_text").val();
		//post it to sned.php
   $.ajax({ 
	  type:'POST',
	  url:'send.php?user=<?php echo $_GET['user']?>',
	  data:{
	   text:message_text,
=======
<script>
$("document").ready(function(event) 
{
	//now if the fomr is sumbitted 
	$("#rightside").on('submit', 'msg', function(){
		//take the data from input 
   var message_text = $("minput").val();
<<<<<<< HEAD
		//post it to sned.php
=======
		//post it to sned.php 
>>>>>>> 4821221142a69996b6411f3f65680deae984cc36
   $.post("send.php?user=<?php echo$_GET['user']?>",
   { text:message_text,
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
	
   },
   success:function(data)
   {
	   
	   $("#message_text").val(),
	   document.getElementById("mainmessages").innerHTML += data;
   }
   });
	});
	$("#message-form").keypress(function(e)
	{
				 //sumbits when enter is only pressed 
<<<<<<< HEAD
     if(e.keyCode == 13 && !e.shiftKey)
=======
     if(e.keyCode ==13 && !e.shiftKey)
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
	 {
		 $("#message_text").submit();
		

	 }
	});
});
<<<<<<< HEAD


=======
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
</script>
</html>
