<?php
//data base conection
$server = "localhost";
$username = "root";
$password = "";
$dbname = "ssms";
$con = mysqli_connect($server, $username, $password, $dbname,);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  ?>