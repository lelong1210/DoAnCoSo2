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
  $token = $client->fetchAccessTokenWithAuthCode($_SESSION['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  //
  $tendangnhap = $email;
  $ngaythamgia = date("Y-m-d");
  $matkhau = "";
  if ($data["taikhoanModel"]->checkAcount($tendangnhap)) {
    $data["taikhoanModel"]->dangnhap($tendangnhap, $matkhau);
  } else {
    if ($data["taikhoanModel"]->dangky($tendangnhap, "", $email, 0, $ngaythamgia)) {
      $data["taikhoanModel"]->dangnhap($tendangnhap, $matkhau);
    }
  }
  unset($_SESSION['code']);
  // echo $google_account_info;
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='" . $client->createAuthUrl() . "'><i class='fab fa-google'></i></a>";
}
