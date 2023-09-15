<?php

session_start();

$_SESSION["id"] = $_GET["id"];
$_SESSION["ap"] = $_GET["ap"];

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WiFi Portal</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    </head>
    <body>
		<p>Bienvenue !<br>
		Veuillez vous connecter à notre service Wifi</p>

		<form method="post" action="connecting.php">
			Nom et Prénom
			<input type="text" name="name" placeholder="Insérer votre Nom et Prénom"><br>
			Email
			<input type="email" name="email" placeholder="Insérer votre Email"><br>
			<input type="submit" value="S'inscrire">
		</form>
    </body>
</html>
