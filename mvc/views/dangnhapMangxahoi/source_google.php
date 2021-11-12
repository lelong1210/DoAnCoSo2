<?php
// require_once './mvc/vendor/autoload.php';
require_once "./mvc/google/vendor/autoload.php";
// init configuration
$clientID = '892983593171-fue6cco6othcpsp4jdrrde3ctijtur1i.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/www/';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_SESSION['code'])) {
  
} else {
  echo "<a href='" . $client->createAuthUrl() . "'><i class='fab fa-google'></i></a>";
}
