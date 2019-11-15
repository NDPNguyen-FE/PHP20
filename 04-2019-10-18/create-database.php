<?php
$serverName = "localhost";

$userName = "root";

$password = "";
//tao ket noi
$connect = mysqli_connect($serverName, $userName, $password);


// test connect
if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

// tao database
$sql = "CREATE DATABASE myDB";


//tao table

$sql = "CREATE TABLE myDB.users(
    id INT,
    email varchar(50),
    password varchar(50)
)";


$sql = "INSERT INTO myDB.users 
(id, email,password)
VALUES
(1, 'ndpn.dev@gmail.com', '123456'),
(2, 'bngjs@gmail.com','qwerty' ),
(3,  'hainam@gmail.com','tyuioop'),
(4, 'bxp@gmail.com','012012021'),
(5, 'hyny@gmail.com','zxcvbn')";

$sql = "SELECT * FROM myDB.users";
$result = mysqli_query($connect,$sql);

if(mysqli_num_rows($result)> 0){

    while($row = mysqli_fetch_assoc($result)){
        echo "ID". " ". $row["id"]." ". "-Email"." "  . $row["email"]." ". "-Pass"." " .$row["password"] ."<br>"; 
    }
}
    else
{
    echo "0 result";
};
mysqli_close($connect);