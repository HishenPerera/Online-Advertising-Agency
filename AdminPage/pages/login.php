<?php
session_start();

include '../config/connection.php';
if (isset($_POST['btnSign'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the entered email and password match the admin credentials
    if ($email === 'hishen@sliit.lk' && $password === 'hishen@1234') {
        // If admin credentials match, redirect to admin dashboard
        header('Location: ../pages/adminDashboard.php');
        exit(); // Stop further execution
    }

    else if ($email === 'tharusha@adhandiya.com' && $password === 'tharusha@1234') {
        // If admin credentials match, redirect to admin dashboard
        header('Location: ../pages/adminDashboard.php');
        exit(); // Stop further execution
    }

    $loginSQL = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $loginSQLCode = " SELECT * FROM `userslog` WHERE `email` = `$email` AND `password` = `$password` ";
    $login = $connection->query($loginSQL);
    if ($login->num_rows > 0) {
        $row = $login->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header('Location: ../..//UserDashboard/dashboard.php');
    } else {
        echo "Invalid Email or Password";
    }   
}

if (isset($_POST['btnSignUp'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $registerSQL = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    $register = $connection->query($registerSQL);
    if ($register) {
        echo "User Registered Successfully";
        header('Location: ');
    } else {
        echo "Error Registering User";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login Page</title>
</head>
<style>
    .social-icons {
        display: none;
    }
</style>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="login.php" method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="btnSignUp">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>

                </div>
                <span>or use your email password</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="ForgotPassword/forgotPass.php">Forget Your Password?</a>
                <button type="submit" name="btnSign">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/loginController.js"></script>
</body>

</html>