<?php

session_start();


//This function will destroy your session

session_destroy();

echo "You are now logged out of your account! <a href=index.php>Home</a> or <a href=login.php>Login</a>";


?>
