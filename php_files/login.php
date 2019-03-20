<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasty-Restaurent</title>
    <link rel="stylesheet" type="text/css" href="css_files/loginstyles.css">
</head>
<body style="background:url('images/login_background.jpg') no-repeat;background-size: cover;">
    <div class="loginscreen">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <img src="images/pic.jpg" alt="usericon" class="userimage">
            <h2>Login Here</h2>
            <input type="text" name="Username" placeholder="Enter UserName" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit"><b>Login</b></button>
            <p><?php
                error_reporting(0);
                include('loginaction.php');
            ?></p>
        </form>
    </div>
    
</body>
</html>