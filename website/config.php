<?php
session_start();
require_once "API/vendor/autoload.php";
$google_client = new Google_Client();
$google_client->setClientId("111074733714-r3eumc1ld5k5lo47olad923big241fij.apps.googleusercontent.com");
$google_client->setClientSecret("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");
$google_client->setApplicationName("movie ticket booking system");
$google_client->setRedirectUri("http://localhost/code/website/checker.php");

$google_client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.profile");
include 'db connection.php';

?> 