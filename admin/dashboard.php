<?php
session_start();
include("../config.php");

// check login

if (!isset($_SESSION["id"]) || $_SESSION['user_role'] !== 'admin') {
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
  <style>
    .dashboard {
      font-family: "Paytone One", "Bebas Neue", sans-serif;
    }
  </style>
</head>

<body>
  <!-- Admin Sidebar -->
  <aside class="bg-[#420101] w-[20vw] h-[100vh] ">
    <div class="bg-[#240303] text-center text-[20px] text-white mb-2 ">
      <h2 class=" mx-2 p-2 dashboard">Admin Dashboard</h2>
      <span>Hello, <?php echo $_SESSION["username"]; ?></span>
    </div>
    <ul class=" mx-2 text-[18px] text-white p-2">
      <li> <a href="dashboard.php">Home</a></li>
      <li> <a href="#">Add Feature</a></li>
      <li><a href="#">Add Products</a></li>
      <li><a href="#">Orders</a></li>


      </div>
  </aside>
<!-- Dashboard View -->
 <section>
  
 </section>
</body>

</html>