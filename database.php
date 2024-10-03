<?php

$serverName = "localhost";
$dbUserNmae = "root";
$dbPassword = "";
$dbName = "nexslot";

$conn = new mysqli($serverName , $dbUserNmae , $dbPassword , $dbName);

if(!$conn){
    die("connection failed");
}
else{
    //echo 'its working';
}