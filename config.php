<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("495701683966-lsdvu0dv723ake15t0osd5hbgdf4u3c8.apps.googleusercontent.com");
	$gClient->setClientSecret("FW3w7-zRYkvCDSaTacGKJnp_");
	$gClient->setApplicationName("Piotr Murdzia login test");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
