<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed .$conn->connect_error";
}
else{
    echo "connection success";
}

?>