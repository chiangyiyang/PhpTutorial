<?php

$serverName = "localhost";
$userName = "root";
$password = "mary1234";
$database = "class";

//create database connection
$conn = mysqli_connect($serverName, $userName, $password, $database);

if(mysqli_connect_errno())
    echo "Fail to connect to mysql", mysqli_connect_errno();
else
//    echo "建立成功<br>";

mysqli_query($conn, "SET NAMES utf8");

