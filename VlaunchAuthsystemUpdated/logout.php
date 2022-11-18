<?php
session_start();
$_session['signIn']= true;    
$_SESSION['$email']= $eamil;
session_unset();
header('location:welcome.php');
session_destroy();
?>
