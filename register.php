<?php
include("config.php");




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Rc Prints & Computer Parts || Register</title>
</head>

<body>
    <section>
        <!-- Register -->
        <div class="w-full mt-5  flex items-center justify-center">

            <div class="w-[30vw] border p-4 bg-white rounded ">
                <form method="post" class="flex flex-col gap-3 ">
                    <h1 class="text-center text-[30px] font-semibold">Register</h1>
                    <label>Full_Name</label>
                    <input type="text" placeholder="enter your name" name="name" class="border p-1 ">

                    <label>Email</label>
                    <input type="email" placeholder="enter your email" name="email" class="border p-1 ">
                    <label>Password</label>
                    <input type="password" placeholder="enter password" name="password" class="border p-1 ">

                    <button type="submit" name="reg_btn"
                        class="bg-red-900 p-1 rounded text-white text-[18px] hover:bg-red-800 cursor-pointer">Register</button>
                    <span class="text-end"><a href="login.php">Already Register | Login</a></span>
                </form>
            </div>
          
        </div>
        <div class="text-center ">
              <?php
            if (isset($_POST["reg_btn"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                $role = "user";

                // check 
                $check = "SELECT * FROM users WHERE email= '$email'";
                $result = mysqli_query($conn, $check);

                if(mysqli_num_rows($result)>0){
                    echo "Email already register";
                    exit;
                }


                $query = "INSERT INTO users(full_name,email,password,role)VALUES('$name','$email','$password','$role')";
                $data = mysqli_query($conn, $query);

                if ($data) {
                    echo "User register Sucessfully..";
                    header("Location: login.php");
                    exit;
                } else {
                    echo "Error";
                }


            }
            ?>

        </div>

    </section>

</body>

</html>