<?php
include "include/logindetail.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login-.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <section>
   <b class="Register">SIGN IN</b> 
   <form action="" method="post">  
        <input type="email" name="email" placeholder="example@gmail.com">
        <input type="password" name="password" placeholder="Password">
        <a href="" ><button type="submit" name="forgotpassword" class="btn">Forgotten Password?</button></a>
        <button type="submit" name="login" class="submits">LOGIN</button>
   </form>
   </section>
   <?= $detailsError; ?>
</body>
</html>