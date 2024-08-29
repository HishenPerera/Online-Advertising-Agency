<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgotPass.css">
</head>
<body background="bg.jpg">

<div class="container">
    <form action="password_reset.php" method="post">
        <h2>Forgot Password</h2>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="pass" name="password" required>

        </div>
        <div>
            <input type="submit" value="Reset Password">
        </div>
    </form>
</div>
</body>
</html>
