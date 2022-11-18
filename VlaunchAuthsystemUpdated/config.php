<?php

$servername="localhost";
$username="root";
$password="";
$db="VlaunchJob";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("You are  not Connected  "  . mysqli_connect_error());
}
?>