 
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
 