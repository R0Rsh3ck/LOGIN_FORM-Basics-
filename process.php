<?php
	// variabels
	$userName	= $_POST['username'];
	$password	= $_POST['password'];

	if ($userName == "ahmed" && $password == "123456"){

		echo "<center>" . "Welcome " . $_POST['username'] . "<br />" . " You Have Been Logged In!" . "</center>";

	} else{

		echo "<center>" . "Your username or password incorrect!" . "<br />" . " Please try again!" . " <br /> " .  "<a href='login.php'>" . " Back to Login Form!" . "</a>" . "</center>";

	}
