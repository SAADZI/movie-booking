<?php
require_once "config.php";
if (isset($_SESSION['access_token']))
$google_client ->setAccessToken($_SESSION['access_token']);
else if (isset($_GET['code'])){
$token = $google_client ->fetchAccessTokenWithAuthCode($_GET['code']);
}
else{
header('Location: index.php');
exit();
}
$oAuth = new Google_Service_OAuth2($google_client);
$data = $oAuth->userInfo_v2_me->get();
$_SESSION['id']         =     $data['id'];
$_SESSION['givenName']  =     $data['givenName'];
$_SESSION['familyName'] =     $data['familyName'];
$_SESSION['email']      =     $data['email'];
$_SESSION['picture']    =     $data['picture'];
$query=mysqli_query($con,"INSERT INTO google_users VALUES('".$data['id']."','".$data['givenName'].",'".$data['familyName'].",'".$data['email'].",'".$data['picture']."')");
header('location:dashboard.php');
exit();


?>