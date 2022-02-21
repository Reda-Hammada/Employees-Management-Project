<?php

$connectDB =  mysql_connect('localhost', 'Reda', '123456', 'prototype3');


if($connectDB){

    echo " data base connection error " . mysqli_connect_error();
}


?>