<?php

$host = "localhost";
$uname = "root";
$pass = "";
$dbname = "laundry"; 

$conn = mysqli_connect($host, $uname, $pass, $dbname);

if(!$conn){
    die("Connection failed!");
}else{
    //echo "Connection Established!";
}
