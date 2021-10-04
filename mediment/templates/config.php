<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("927073325752-q9df0aqft13nomp94qijjru6a7htkpg1.apps.googleusercontent.com"); 
    $gClient->setClientSecret("YE1nRCXcV0lVbjYyAr2pCEuO"); 
	$gClient->setApplicationName("CPI mediment");
	$gClient->setRedirectUri("http://localhost/Mediment/mediment/templates/g-callback.php"); 
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
