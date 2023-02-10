<?php
$servername="db-1";
$username="capp1";
$password="1769mona";
$dbname="capp1";
//creating connection
$conn=new mysqli ($servername, $username, $password, $dbname);

//check the connection
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

?>