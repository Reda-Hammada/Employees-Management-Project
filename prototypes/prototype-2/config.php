<?php
   $conn = mysqli_connect('localhost', 'Reda', '123456', 'prototype2');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>