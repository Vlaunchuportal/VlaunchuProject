<?php
$servername="localhost";
$username="root";
$password="";
$db="vlaunchJob";
 $sql= mysqli_connect($servername,$username,$password,$db);
if(!$sql){
    die("not Connected".mysqli_connect_error());
}
?>