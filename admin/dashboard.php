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
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <title>Dashboard || Admin</title>
</head>

<body>
  <aside>
  <h2>Dashboard</h2>
        <ul>
            <li>Home</li>
            <li>Add Feature</li>
            <li>Setting</li>
            <li>Logout</li>
        
    </div>
  </aside>

</body>

</html>