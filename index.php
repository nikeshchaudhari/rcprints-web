<?php
session_start();
include("config.php");




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

    <title>RC Prints & Computer Parts || Home</title>
    <style>
        .logo-rc {
            font-family: "Paytone One", "Bebas Neue", sans-serif;
            ;
            font-weight: 400;

        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <div class="flex justify-between bg-black text-white p-2">
            <div><span>100% Safe Photo and Framing Delivery services</span></div>
            <div class=" flex gap-5">
                <span><i class="fa-solid fa-magnifying-glass mr-3"></i>Search </span>
                <span><i class="fa-solid fa-basket-shopping mr-3"></i>Cart </span>
            </div>
        </div>

        <div class="nav flex justify-between  w-full  items-center py-4
  ">
            <div class="w-50vw text-[40px] ml-3 logo-rc">RC PRINTS & COMPUTER</div>
            <div class="">
                <ul class="flex gap-8 mr-5">
                    <li class="font-semibold"><a href="index.php">Home</a></li>
                    <li class="font-semibold"><a href="#">About</a></li>
                    <li class="font-semibold"><a href="#">Services</a></li>
                    <li class="font-semibold"><a href="#">Contact Us</a></li>

                    <li>
                        <div>
                            <?php if (isset($_SESSION['id'])): ?> <a href="register.php"
                                    class="bg-red-800 text-white px-5 py-1 rounded hover:bg-red-900 cursor-pointer">Profile</a>
                                <a href="logout.php"
                                    class="bg-red-800 text-white px-5 py-1 rounded hover:bg-red-900 cursor-pointer">Logout</a>

                            <?php else: ?> <a href="register.php"
                                    class="bg-red-800 text-white px-5 py-1 rounded hover:bg-red-900 cursor-pointer">Register</a>
                                <a href="login.php"
                                    class="bg-red-800 text-white px-5 py-1 rounded hover:bg-red-900 cursor-pointer"
                                    name="login_btn">Login</a>
                            <?php endif; ?>
                        </div>
                    </li>


                </ul>

            </div>
        </div>
    </header>

    <!-- Section -->
    <section>
        <!--Hero  -->
        <div class="relative w-full  mx-auto overflow-hidden ">
            <div id="slider" class="shadow-xl flex  transition-transform duration-500  ">
                <img src="assets/1.jpg" alt="images1" class="w-full flex-shrink-0 object-cover h-[80vh]">
                <img src="assets/2.jpg" alt="images2" class="w-full  flex-shrink-0 object-cover h-[80vh]">
            </div>

            <!-- Prev Button -->
            <button id="prev" class="absolute left-4 top-1/2"><i
                    class="fa-solid fa-circle-arrow-left text-white text-[30px] cursor-pointer"></i></button>
            <button id="next" class="absolute right-4 top-1/2 text-white"><i
                    class="fa-solid fa-circle-arrow-right text-[30px] cursor-pointer"></i></button>
        </div>

    </section>

    <script>
        let slider = document.getElementById("slider");
        let totalslide = slider.children.length;
        let index = 0;

        document.getElementById("next").onclick = function () {
            index = (index + 1) % totalslide;
            slider.style.transform = `translateX(-${index * 100}%)`;

        }
        document.getElementById("prev").onclick = function () {
            index = (index - 1 + totalslide) % totalslide;
            slider.style.transform = `translateX(-${index * 100}%)`;
        }
    </script>


</body>

</html>