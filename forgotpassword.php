<?php
include "include/fgp.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="fgp.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <section>
   <b class="Register">RECOVER PASSWORD</b> 
   <form action="" method="post">  
        <input type="email" name="email" placeholder="example@gmail.com">
        <button type="submit" name="sendcode" class="submits">SEND CODE</button>
   </form>
   </section>
   <?= $detailsError; ?>
</body>
</html>