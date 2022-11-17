<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "mysql";

$connection = new mysqli($server_name, $user_name, $password, $db_name);
/*
if($connection->connect_error){
    die ("connection failed". $connection->connect_error);
}else{
    echo "connected successfully";
}*/


?>