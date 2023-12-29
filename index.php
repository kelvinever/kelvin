<?php
include "include/details.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <b class="Register">SIGN UP</b> 
        <form action="userpage.php" method="post">
            <input type="text" name="username" id="" placeholder="Username" class="inputs">
            <input type="email" name="email" placeholder="example@gmail.com" class="inputs">
            <input type="password" name="password" placeholder="Password" class="inputs">
            <div class="p-btn">
                <button type="submit" name="register" class="submit">SIGN UP</button>
                <button type="submit" name="login" class="submits">LOGIN</button>
            </div>
            <div class="checkbox2">
                <div class="checkbox1">
                    <input type="checkbox" class="checkbox">
                    <a href="">Terms and Conditions</a>
                </div>
                <g>Do you have an account?</g>
            </div>
        </form>
    </section>
   <?= $detailsError; ?>
    
</body>
</html>