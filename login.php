<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h2>Login</h2><form action="loginProcess.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Kirim">
</form></center>   
<?php 
    if(isset($_GET['pesan'])){?> 
       <label style="color:red;"><?php echo $_GET['pesan'];?></label><?php
    } ?>
</body>
</html>