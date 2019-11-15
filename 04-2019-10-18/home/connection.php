<?php
$username = "root"; 
$password = "";      
$server   = "localhost";   



$connect = mysqli_connect($server, $username, $password);

if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}


$username = "";
$password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["username"]))
     { 
         $username = $_POST['username'];
    
    }
    if(isset($_POST["password"])) 
    { 
        $password = $_POST['password'];
     }
   

    
    $sql ="CREATE DATABASE db";
    $sql  = "CREATE TABLE db.users(username varchar(225),password varchar(50))";
    $sql = "INSERT INTO db.users 
    (username,  password)
    VALUES 
    ('$username',
     '$password')";

    if (mysqli_query($connect, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}


?>