<?php
$servername="localhost";
$username="root";
$password="";
$database="vlaunchjob";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die('connextion Failed'.connect_error());
}
echo'connected';

?>

