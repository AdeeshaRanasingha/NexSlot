<?php

$serverName = "localhost";
$dbUserNmae = "root";
$dbPassword = "";
$dbName = "nexslot";

//connection
$conn = new mysqli($serverName , $dbUserNmae , $dbPassword , $dbName);

if(!$conn){
    die("connection failed");
}
else{
    //echo 'its working';
}