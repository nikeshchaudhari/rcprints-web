<?php
session_start();
include("config.php");

if(isset($_POST["login_btn"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT *FROM users WHERE email='$email'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($data);

    if($result && password_verify($password, $result["password"])){ 
        $_SESSION["id"] = $result["id"];
        $_SESSION["username"] = $result["full_name"];
        $_SESSION["user_role"] = $result["role"];

        if($result["role"] ==='admin'){
            header('Location:admin/dashboard.php');
        }else{
            header('Location:index.php');
        }
    }else{
        echo  "Invalid user or password..";
    }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Rc Prints & Computer Parts || Login</title>
</head>
<body>
    <section>
        <div class="w-full h-[100vh]  flex items-center justify-center">

    <div class="w-[30vw] border p-4 bg-white rounded ">
        <form method="post" class="flex flex-col gap-3 ">
            <h1 class="text-center text-[30px] font-semibold">Login</h1>
           
            <label>Email</label>
            <input type="email" placeholder="enter your email" name="email" class="border p-1 ">
            <label>Password</label>
            <input type="password" placeholder="enter password" name="password" class="border p-1 ">
            <button type="submit" class="bg-red-900 p-1 rounded text-white text-[18px] hover:bg-red-800 cursor-pointer" name="login_btn">Login</button>
            <span class="text-end"><a href="register.php">Not Register For | Register</a></span>
        </form>
    </div>

</div>
    </section>
</body>
</html>