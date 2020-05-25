<?php
$connect = mysqli_connect("localhost", "root", "root", "c9") or die("summut gungan rong");
//When the user has been created,it wil be put onto the database, so new users can look onto the website, it will also connects  to 			     the database so it can put the new  users and passwords onto the database.
if (isset($_POST["username"])) {
	$new_user = mysqli_real_escape_string($connect, ($_POST["username"]));
	$new_pass = $_POST["password"];
	$confirm_pass = $_POST["password2"];


	// $query = "SELECT * FROM c9 WHERE Username=$new_user ";

	if (strcmp($new_pass, $confirm_pass) !== 0) {
		echo '<p class ="WrongData">Passwords did not match</p>';
		// $query = "SELECT * FROM c9 WHERE Username=$new_user ";


	} else {
		$insert = "INSERT INTO tutor(Username, Password)
				   VALUES ('$new_user', '$new_pass' )";
		$results = mysqli_query($connect, $insert);
		if ($results) {
			session_destroy();
			header("Location: login.php");
		}
	}
}
?>
<!doctype html>
<html>

<?php require 'meta.php' ?>

<body>
	<?php require 'header.php' ?>

	<div class="container">
		<div class="row">
			<h1 class="col-xs-12"> Sign Up </h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class=" LoginBoxContainer col-xs-12 col-md-6">

				<form action="sign_upTutor.php" method="post">
					<fieldset>


						<div>

							<label>Username:</label>
							<input name="username" type="text" id="user" class="form-control">
							<div id="um"></div>

						</div>
						<div>
							<label> Password </label>
							<input size="17" type="password" size"20" maxlengh="15" name="password" class="form-control">

							<label> Confirm Password </label>
							<input size="17" type="password" size"20" maxlengh="15" name="password2" class="form-control">
						</div>



						<div class="next loginbutton">
							<input type="submit" value="Sign up" class="btn btn-default  btn-primary form-control" id="disable">
						</div>

					</fieldset>
				</form>

			</div>
		</div>
	</div>
</body>


<script type="text/javascript">
	$('#user').keyup(function() {
		var users = $('#user').val();
		//$('#um').html('<img src="load.gif"> ');

		if (users != '') {
			$.post('CheckingTutor.php', {
					username: users
				},
				function(data) {
					$('#um').html(data);

				});
		} else {
			$('#um').html('');
		}
	});
</script>

</html>