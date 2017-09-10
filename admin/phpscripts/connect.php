<?php
// $user = "Schy";
// $pass = "";
// $url = "107.180.109.10";
// $db = "db_mccallum";

$user = "root";
$pass = "";
$url = "localhost";
$db = "db";

$link = mysqli_connect($url, $user, $pass, $db);

if(mysqli_connect_errno()){
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
 ?>
