<?php

$connectDB =  mysqli_connect('localhost', 'Reda', '123456', 'prototype3');

// check if connection went successfully 
if(!$connectDB){

    echo " data base connection error " . mysqli_connect_error();
}


?>