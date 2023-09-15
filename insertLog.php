<?php
// $mac = $_POST["id"];
// $ap = $_POST["ap"];
// $name = $_POST['name'];
// $email = $_POST['email'];

$configPath = './config.json';
$jsonString = file_get_contents($configPath);
$jsonData = json_decode($jsonString, true);

$connection = mysqli_connect($jsonData['dbServer'],$jsonData['dbUser'],$jsonData['dbPassword'],$jsonData['dbName']);

$query = "INSERT INTO `logs` (`mac_addr`, `name_usr`, `email_usr`, `timestamp_conn`) VALUES (?,?,?,NOW());";
$stmt = mysqli_prepare($connection, $query);
$params = [$mac,$name,$email];
$exe = mysqli_stmt_execute($stmt);
if($exe) {
  echo '<script>console.log(200);</script>';
}
else {
  echo '<script>console.log(400);</script>';
}
mysqli_stmt_close($stmt);
mysqli_close($connection);


?>