<?php
 session_start();

 $username = 'admin';
 $password='admin';

 

  if($_POST['username'] == $username && $_POST['password'] == $password){

    $_SESSION['admin'] = $_POST['username'];

    header('location:index.php');
  }

 else {

    header('location:login.php');
 }
  
    

 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name='username'>
        <input type = "password" name="password">
        <input type = "submit" value= "log in">
    </form>
</body>
</html>