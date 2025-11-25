<?php
session_start();
include("../config.php");

// check login

if(!isset($_SESSION["id"])|| $_SESSION['user_role']!=='admin') {
    header("Location:login.php");
    exit;
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || Admin</title>
</head>

<body>

</body>

</html>