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
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
 <meta charset="utf-8">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="main.js"></script>

	</head>
	<body>
<<<<<<< HEAD

  <?php require 'newmessage.php' ?>
  <?php require 'LeftSide.php' ?>
 
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


										 <div id="newcontact">
									 		<p class="header">&nbsp; </p>
									 					<p class="body"><form method="post">
									 				<input type="text" class="minputU" id="user" placeholder="user" name="user"  />
									 				<textarea class="minput" name="nmess" placeholder="write the message"></textarea><br><br>
									 				 <div id = "um"></div>
									 				<br>
									 				<?php require_once 'message.php'; ?>
									 				<input type="submit"  id ="submit" name="send" value="send" />
									 				<input type="submit" class="cancel" onclick="cancel()" name="cancel" value="cancel" />
									 			</form> </p>

									 				</div>

														<div id="container">
												            <div id="leftside">
																<div id="contactsside">
												     <div onclick="display()" class = "mess"> <p class="nMess"> New message</p> </div>

				 	<?php
		                   require 'connection.php';
	// select distinct only gets the different values that is in the system. else there be a ton of Jon_Barton in the contracts.
	    $query ='SELECT DISTINCT `messagee`, `messager`
	FROM `chat` WHERE `messager`= "'.$_SESSION['Username'].'"  ';
$results = mysqli_query($connect,$query);
 //if $results true, then continue.
 if($results){
	 if(mysqli_num_rows($results)>0)
	 {
	  while ($row=mysqli_fetch_Assoc($results))
		 {
		//counter will be increased very time. $newuser will be the array to increase every time when it get called later on.
	     		$counter = 0;
	     		$newuser = array();
			//$row is connecting to phpmyadmin
			$user_sender= $row['messager'];
			$Ureciver= $row['messagee'];
		//session = the sender, then continue with getting the contacts
					if($_SESSION['Username']== $user_sender)
									{
                 //add the reciver but only once
	               //checking the array to see who the user has talked to.
				if(in_array($Ureciver, $newuser))
			{
     		} // if there new usernames that the user has messaged then it will continue the counter and display
				 //them on the contract
		  else
		       	{
		            ?>
		 	<div class="contact">
		              <?php
		                 /*
			When the user clickes on the contact, the url will be
			?user=.$Ureciver, this will change to the reciver name.
			all the users will be on the left pannel.*/
		         echo '<a href="?user='.$Ureciver.'">'.$Ureciver.'</a>';?>
		          </div>
		           <?php
		               }
			           } //end of bracket session = user_Sender
							        }// end of while loop
					    				}// end of if statement for $reuslts >0
			             	}//end if($results)
        ?>
		   </div>
	</div>
>>>>>>> parent of b50c7b2... working version so far
		<div id="rightside">

	      		<div id="mainmessages">
	        <?php
	        		require_once 'message.php';
	        		require_once 'connection.php';
		          /*
	        selecting from the messages database with the varibles that have been created.
	        $_GET['user'] is header //('Location:profilepage.php?user='.$Ureciver);
	        every time user='.$Ureciver it would show each different message when the user has sent a new message to a user.
<<<<<<< HEAD
			*/
					$query= 'SELECT * FROM  `chat` WHERE `messager`= "'.$_SESSION['username'].'"
=======
	*/
					$query= 'SELECT * FROM  `chat` WHERE `messager`= "'.$_SESSION['Username'].'"
>>>>>>> parent of b50c7b2... working version so far
					AND `messagee` ="'.$_GET['user'].'"
					OR `messager` = "'.$_GET['user'].'"
					AND `messagee` = "'.$_SESSION['Username'].'" ';
					$results = mysqli_query($connect, $query);
							if ($results)
								{ //if the query is successful then do this.
									while ($row = mysqli_fetch_assoc($results))
										{
	  //$user_sender = $row['messager'];, in the database.
	  // this will be the same through out the whole database.
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
<<<<<<< HEAD
		  </div> 
		   <div class="container">
		   <div class="row">
		    
			<div class="col-md-2">
			</div>
			<div class=" col-12 col-md-10">
				<form method="post" id="message-form" >  
				<input class="textarea" id="message_text" placeholder= "Write your message"/>
											</div>
=======
	      </div>
				<form method="post" id = "msgbox">
					<input type= "text" class="minputs" name="nmess" id = "minputs" placeholder="write the message">
				</form>

>>>>>>> parent of b50c7b2... working version so far
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
	  type:"POST",
	  url:"send.php?user=<?php echo $_GET['user']?>",
	  data:{
	   text:message_text,
=======
											<script>

$("document").ready(function(event) 
{
	$("#rightside").on('submit', 'msg', function(){
   var message_text = $("minput").val();
   $.post("send.php?user=<?php echo$_GET['user']?>",
   { text:message_text,
>>>>>>> parent of b50c7b2... working version so far
	
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
<<<<<<< HEAD
				 //sumbits when enter is only pressed 
     if(e.keyCode == 13 && !e.shiftKey)
=======
     if(e.keyCode ==13 && !e.shiftKey)
>>>>>>> parent of b50c7b2... working version so far
	 {
		 $("#message_text").submit();

	 }
	});
});
<<<<<<< HEAD


</script>
</html>
=======
											 </script>
</html>
>>>>>>> parent of b50c7b2... working version so far
