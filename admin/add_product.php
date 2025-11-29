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
    <div class="flex min-h-screen bg-red-600">
        <aside class="bg-[#271929] w-[20vw] min-h-screen hidden md:block ">
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

            </ul>

        </aside>

        <!-- Dashboard View -->
        <main class="flex-1 bg-gray-100  h-auto">
            <div class="header bg-[#CFCFCF] h-[50px] md:h-[50px] w-full flex justify-between items-center ">
                <div class="flex w-full justify-start  md:justify-center">
                    <h1 class="font-semibold ">Add Products</h1>
                </div>
                <!-- Hamburger icon -->
                <div class="mb-icon md:hidden text-[20px] cursor-pointer hamburger ">
                    <i class=" fa-solid fa-bars mx-2"></i>
                </div>
            </div>

            <!-- Mobile view Navbar -->
            <div id="overlay" class="fixed inset-0 bg-black/50 bg-opacity-50 hidden  z-30"></div>

            <nav id="mobile-menu"
                class="fixed top-0 right-[-100%] h-full w-64 bg-white z-40 transition-all duration-300 ">
                <div class="flex justify-end w-full close-btn  ">

                    <i class="fa-solid fa-xmark text-[25px] m-2"></i>
                </div>
                <div class=" flex flex-col gap-4 ">
                    <a href="dashboard.php" class="  active:bg-[#180B1A]/50 w-full  px-3 py-2  ">Dashboard</a>
                    <a href="#" class="active:bg-[#180B1A]/50 w-full  px-3 py-2">Add Feature</a>
                    <a href="add_product.php" class="active:bg-[#180B1A]/50 w-full  px-3 py-2">Add Products</a>
                    <a href="#" class="active:bg-[#180B1A]/50 w-full  px-3 py-2">Orders</a>
                    <a href="../logout.php" class="active:bg-[#180B1A]/50 w-full  px-3 py-2">Logout</a>
                </div>
            </nav>
            <!-- form -->
            <div class="flex justify-center">
                <form method="POST" class="flex flex-col block w-[70vw] mt-5   ">
                    <label for="" class="text-[20px] font-semibold">Product Name</label>
                    <input type="text" placeholder="Enter product name" name="product_name"
                        class="border px-2 py-1 m-2">
                    <label for="" class="text-[20px] font-semibold">Price</label>
                    <input type="text" placeholder="Enter price" name="product_price" class="border px-2 py-1 m-2">
                    <label for="" class="text-[20px] font-semibold">Category</label>
                    <select name="" id="" class="border px-2 py-1 m-2">
                        <option value="">--Select Category--</option>
                        <option value="Wedding Photoshot">Wedding Photoshot</option>
                        <option value="Videography">Videography</option>
                        <option value="Accessories">Accessories</option>
                        <option value="Electronic">Electronic</option>
                    </select>
                    <label for="" class="text-[20px] font-semibold">Description</label>
                    <textarea placeholder="Enter product description" name="description"
                        class="border px-2 py-1 m-2"></textarea>
                    <!-- <label for="">Product Image</label> -->
                    <input type="file" id="fileInput" accept="image/*" name="img_file"
                        class="border px-2 py-1 m-2    md:w-56 rounded cursor-pointer">

                    <button type="submit"
                        class="text-[20px] font-semibold bg-red-900 cursor-pointer  rounded   text-white hover:bg-red-800 ">Add
                        Product</button>

                </form>
            </div>
            <h1>Next</h1>
        </main>
    </div>




    <script src="../js/script.js"></script>



</body>

</html>