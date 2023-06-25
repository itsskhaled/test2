<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salon";

$conn = mysqli_connect($servername , $username , $password , $dbname);

if (!$conn){
    die("filed connection" . mysqli_connect_error());
}
?>