<?php 
$host = "localhost";
$user = "root";
$password ="";
$database = "rcprints";


$conn = new mysqli($host, $user, $password, $database); 

if ($conn->connect_error) {
    die("". $conn->connect_error);
}
?>