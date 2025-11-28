<?php
session_start();
include("../config.php");


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
                <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="add_product.php" class="m-2">Add Products</a></li>
                <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="#" class="m-2">Orders</a></li>
                <li class=" p-2 hover:bg-[#180B1A] w-full"><a href="../logout.php" class="m-2">Logout</a></li>



        </aside>
        <!-- Dashboard View -->

        <main class="flex-1 bg-gray-100 ">
            <div class="flex flex-col ">
                <h1 class="">Add New Product</h1>
                <form method="POST" class="flex flex-col block">
                    <label for="">Product Name</label>
                    <input type="text" placeholder="Enter product name">
                    <label for="">Price</label>
                    <input type="text" placeholder="Enter price">
                    <label for="">Category</label>
                    <select name="" id="">
                        <option value="">--Select Category--</option>
                        <option value="Wedding Photoshot">Wedding Photoshot</option>
                        <option value="Videography">Videography</option>
                        <option value="Accessories">Accessories</option>
                        <option value="Electronic">Electronic</option>
                    </select>
                    <label for="">Description</label>
                    <textarea placeholder="Enter product description"></textarea>
                    <label for="">Product Image</label>
                    <input type="file" id="fileInput" accept="image/*">

                    <button type="submit">Add Product</button>

                </form>
            </div>



        </main>

    </div>
</body>

</html>