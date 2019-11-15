<?php 
$serverName = "localhost";

$userName = "root";

$password = "";

$connect = mysqli_connect($serverName, $userName, $password);



if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}else
    echo "connected sueccessfully";


