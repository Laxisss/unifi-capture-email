<?php

session_start();

$mac = $_SESSION["id"];
$ap = $_SESSION["ap"];
$name = $_POST['name'];
$email = $_POST['email'];

include './insertLog.php';

require __DIR__ . '/vendor/autoload.php';

$duration = 30;
$site_id = 'site_id';

$controlleruser     = 'username';
$controllerpassword = 'password';
$controllerurl      = 'https://1.1.1.1:8443';
$controllerversion  = '5.10.21';
$debug = false;

$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

$auth_result = $unifi_connection->authorize_guest($mac, $duration, $up = null, $down = null, $MBytes = null, $ap);

?>

<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>WiFi Portal</title>
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="refresh" content="5;url=https://www.snsolutions.fr/" />
    </head>
    <body>
      <p>Tu es en ligne! <br>
      Merci de nous rendre visite !</p>
    </body>
</html>
