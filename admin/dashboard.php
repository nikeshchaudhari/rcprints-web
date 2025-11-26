<?php
session_start();
include("../config.php");

// check login

if (!isset($_SESSION["id"]) || $_SESSION['user_role'] !== 'admin') {
  header("Location:login.php");
  exit;
}

$query = "SELECT COUNT(*) AS total_users FROM users WHERE role ='user'";
$data = mysqli_query($conn, $query);
$result=mysqli_fetch_assoc($data);

$toataluser = $result["total_users"];

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
  <div class="flex min-height-screen">

    <aside class="bg-[#271929] w-[20vw] h-[100vh] ">
      <div class="bg-[#221624] text-center text-[20px] text-white mb-2 ">
        <h2 class=" mx-2 p-2 dashboard">Admin Dashboard</h2>
        <span>Hello, <?php echo $_SESSION["username"]; ?></span>
      </div>
      <ul class="  text-[18px] text-white ">
        <li class="p-2 hover:bg-[#180B1A] w-full"> <a href="dashboard.php" class="m-2">Home</a></li>
        <li class="p-2 hover:bg-[#180B1A] w-full"> <a href="#" class="m-2">Add Feature</a></li>
        <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="#" class="m-2">Add Products</a></li>
        <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="#" class="m-2">Orders</a></li>



    </aside>
    <!-- Dashboard View -->
    <main class="flex-1 bg-gray-100  ">
      <div class="header bg-[#CFCFCF] h-[100px] w-full flex items-center px-4">
        <h1>Welcome, <?php echo $_SESSION["username"];?></h1>
      </div>
      <div class="flex justify-center mt-5">
        <div class="cards flex justify-between w-[70vw] ">
        <div class="card flex flex-col justify-center w-[200px] bg-[#BDBDBD] rounded text-center h-[100px] ">
          <h3>Admin</h3>    
          <p><?php echo $toataluser;?></p>
        </div>
        <div class="card flex flex-col justify-center  w-[200px] bg-[#BDBDBD] rounded text-center">
          <h3>Users</h3>
          <p><?php echo $toataluser;?></p>
        </div>
         <div class="card flex flex-col justify-center  w-[200px] bg-[#BDBDBD] rounded text-center">
          <h3>Total Products</h3>
          <p><?php echo $toataluser;?></p>
        </div>
        <div class="card flex flex-col justify-center  w-[200px] bg-[#BDBDBD] rounded text-center">
          <h3>Totals Orders</h3>
          <p><?php echo $toataluser;?></p>
        </div>
      </div>
      </div>
    </main>

  </div>
</body>

</html>