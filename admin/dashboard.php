<?php
session_start();
include("../config.php");

// check login

if (!isset($_SESSION["id"]) || $_SESSION['user_role'] !== 'admin') {
  header("Location:login.php");
  exit;
}

// user cout Query
$query_user = "SELECT COUNT(*) AS total_users FROM users WHERE role ='user'";

$data_user = mysqli_query($conn, $query_user);
$result_user = mysqli_fetch_assoc($data_user);

$toataluser = $result_user["total_users"];
// admin query

$query_admin = "SELECT COUNT(*) AS total_admin FROM users WHERE role='admin'";
$data_admin = mysqli_query($conn, $query_admin);
$result_admin = mysqli_fetch_assoc($data_admin);

$total_admin = $result_admin["total_admin"];
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css"
    integrity="sha512-WxpJXPm/Is1a/dzEdhdaoajpgizHQimaLGL/QqUIAjIihlQqlPQb1V9vkGs9+VzXD7rgI6O+UsSKl4u5K36Ydw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <aside class="bg-[#271929] w-[20vw] h-[100vh] hidden md:block ">
      <div class="bg-[#221624] text-center text-[20px] text-white mb-2 ">
        <h2 class=" mx-2 p-2 dashboard ">Admin Dashboard</h2>
        <span>Hello, <?php echo $_SESSION["username"]; ?></span>
      </div>
      <ul class="  text-[18px] text-white ">
        <li class="p-2 hover:bg-[#180B1A] w-full"> <a href="dashboard.php" class="m-2">Home</a></li>
        <li class="p-2 hover:bg-[#180B1A] w-full"> <a href="#" class="m-2">Add Feature</a></li>
        <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="add_product.php" class="m-2">Add Products</a></li>
        <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="#" class="m-2">Orders</a></li>
        <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="../logout.php" class="m-2">Logout</a></li>



    </aside>

    <!-- Dashboard View -->
    <main class="flex-1 bg-gray-100  ">
      <div class="header bg-[#CFCFCF] h-[50px] md:h-[100px] w-full flex justify-between items-center ">
        <div class="sm:flex sm:w-full sm:justify-center md:block md:w-auto md:justify-start">
          <h1 class="font-semibold mx-2">Welcome, <?php echo $_SESSION["username"]; ?></h1>
        </div>
        <!-- Hamburger icon -->
        <div class="mb-icon md:hidden text-[20px] cursor-pointer ">
          <i class=" fa-solid fa-bars mx-2"></i>
        </div>
      </div>

      <!-- Mobile view Navbar -->
       <nav id="mobile-menu" class="md:hidden">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="">Add Feature</a></li>
          <li><a href="add_product.php">Add Products</a></li>
          <li><a href="">Orders</a></li>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
       </nav>

      <div class="flex justify-center mt-5  overflow-hidden">
        <div class="cards grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2">
          <div class="card flex flex-col justify-center w-[200px] bg-[#BDBDBD] rounded text-center h-[100px] ">
            <h3>Admin</h3>
            <p><?php echo $total_admin; ?></p>
          </div>
          <div class="card flex flex-col justify-center  w-[200px] bg-[#BDBDBD] rounded text-center h-[100px] ">
            <h3>Users</h3>
            <p><?php echo $toataluser; ?></p>
          </div>
          <div class="card flex flex-col justify-center  w-[200px] bg-[#BDBDBD] rounded text-center h-[100px]">
            <h3>Total Products</h3>
            <p><?php echo $toataluser; ?></p>
          </div>
          <div class="card flex flex-col justify-center  w-[200px] bg-[#BDBDBD] rounded text-center h-[100px]">
            <h3>Totals Orders</h3>
            <p><?php echo $toataluser; ?></p>
          </div>
        </div>
      </div>
    </main>

  </div>
</body>

</html>