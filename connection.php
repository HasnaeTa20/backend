<?php
$serverhost = "localhost";
$user = "root";
$password = "";
$database = "corpus";


$con =new mysqli($serverhost,$user,$password,$database);
if(!$con){
    echo "Connection failed!";
    exit();
}

