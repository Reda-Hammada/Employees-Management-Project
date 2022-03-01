<?php 
session_start();
unset($_SESSION['admin'],$_SESSION['password']);
header('location:login.php')


?>