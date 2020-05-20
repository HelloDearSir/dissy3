<?php
session_start();
require_once 'connection.php';
if(isset($_SESSION['username']) and isset($_GET['user'])) {
	if(isset($_POST['text'])) {
		//if text varible from js not !="" then do this.
		if($_POST['text'] !='') {
			$Usender = $_SESSION['username'];
			$Ureciver = $_GET['user'];
			$message = $_POST['text'];
			$query = "INSERT INTO chat(messager, messagee,msg ) VALUES('$Usender', '$Ureciver', '$message')";
			$results =  mysqli_query($db, $query);
			
			if ($results) {
				//if $results is true then post the message as the user.
?>

<div class="user">
	<a href='#'> <?php echo $_SESSION['username']; ?></a>
	<p> <?php echo $message ?></p>
</div>

<?php
			} else {
				//if ($results) is false then do this.
				echo $query;
			}
		} else {
			echo ' please enter some text';
		}
	}
}
?>