<?php
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login1.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['username'] = $userData['username'];
	$_SESSION['password'] = $userData['password'];

    include 'common/db_connection.php';
    $user = $_SESSION['username'];
    $sql = "SELECT * FROM users WHERE email='$user'";
        $search_result = mysqli_query($connect, $sql);
        $num_of_rows = mysqli_num_rows($search_result);
        if($num_of_rows==0){
            header('Location: details.php');
        }else{
            header('Location: afterlogin.php?id=<?php echo $user;?>');
        }
	exit();
?>