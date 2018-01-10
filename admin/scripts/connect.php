<?php
// This file will connect us to the database.
$user = "juliapeden";
$pass = "Glasgow69";
$url = "localhost";
$db = "peden_portfolio";

$link = mysqli_connect($url, $user, $pass, $db, "8888");

//Check Connection error
if(mysqli_connect_errno()){
  printf("Connect Failed: %s\n", mysqli_connect_error());
  exit();
}

?>
