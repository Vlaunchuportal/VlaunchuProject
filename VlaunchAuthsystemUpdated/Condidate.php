<?php
include_once '../VlaunchAuthsystem/config.php';
$showAlert=false;
/*if($_SERVER["REQUEST_METHOD" ]=="POST"){  
    $CondidateEmail=$_POST["CondidateEmail"];
    $CondidateCemail=$_POST["CondidateCemail"];
    $CondidatePassword=$_POST["CondidatePassword"];
    $CondidateCpassword=$_POST["CondidateCpassword"];
    $CondidateAlterEmail=$_POST["CondidateAlterEmail"];
    $CondidatePhoneNumber=$_POST["CondidatePhoneNumber"];
if($CondidatePassword==$CondidateCpassword && $CondidateEmail== $CondidateCemail){
    $sql= "INSERT INTO `signupdata` (`id`, `email`, `password`, `alternateEmail`, `phoneNumber`) VALUES ( '$CondidateEmail', '$CondidatePassword', '$CondidateAlterEmail', '$CondidatePhoneNumber')";
     $resutl=mysqli_query($conn, $sql);
     if($resutl==true){
        $showAlert=true;
        header("location:desktop26.php");
    }
         
}
}*/

if(isset($_POST["submit"])){
            $CondidateEmail=$_POST["CondidateEmail"];
            $CondidateCemail=$_POST["CondidateCemail"];
            $CondidatePassword=$_POST["CondidatePassword"];
            $CondidateCpassword=$_POST["CondidateCpassword"];
            $CondidateAlterEmail=$_POST["CondidateAlterEmail"];
            $CondidatePhoneNumber=$_POST["CondidatePhoneNumber"];
        if($CondidateEmail==$CondidateCemail && $CondidatePassword==$CondidateCpassword){
        $sql= "INSERT INTO `signupdata` (`id`, `email`, `password`, `alternateEmail`, `phoneNumber`) VALUES (NULL,'$CondidateEmail', '$CondidatePassword', '$CondidateAlterEmail', '$CondidatePhoneNumber')";
        $resutl=mysqli_query($conn, $sql);        
        header("location:desktop26.php");
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SignUp Candidate</title>
    <link rel="stylesheet" href="./css/css2.css">
</head>

<body>
    <div class="container">
        <div class="nav">
            <div class="img">
                <hr>
                <img src="./components/VLAUNCHU.png" alt="">
                <img src="./components/BUSINESS LAUNCH.png" alt="">
                <hr>
            </div>
            <div class="navbar">
                <ul style="margin-top: -1220px;">
                    
                    <li><a href="#">Why VLaunchU</a></li>
                    <hr>
                    <li><a href="#">Solutions</a></li>
                    <hr>
                    <li><a href="#">Blog</a></li>
                    <hr>
                    <li><a href="#">Enterprise</a></li>
                    <hr>
                    <li><a href="#">Projects</a></li>
                    <hr>
                
            </div>
        </div>
        <header>

            <div class="line"></div>
            <div>
                <div class="sign">SignUp</div>
                <div class="Recruiter">as a Candidate</div>
            </div>
        </header>
        <div class="search">
            <input type="text" class="search2" placeholder="Search">
            <button>Search</button>
        </div>
        <div class="container1">
            <?php
            if($showAlert){
            echo'<div class="alert alert-success alert-dismissible fade show  " role="alert " style="margin-left:10px">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            ?>
            <?php
                }else{
                    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error:</strong> Please  Insert correct confirm Email and Password same as Email and Password.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';            
                }
                ?>
            <form action="condidate.php" method="POST">
                <h1 style="margin-left:250px;">SignUp</h1>
                <p style="margin-left:250px;margin-top:-12px;" >as a Candidate</p>
                <input type="email" placeholder="Email" class="email" name="CondidateEmail" style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                 <input type="email" placeholder="Confirm Email" class="email" name="CondidateCemail"  style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                  <input type="password" placeholder="Password" name="CondidatePassword" class="email"  style="width:250px;height:40px;margin-left:46px;margin-top:15px;" >
                   <input type="password" placeholder="Confirm Password" class="email" name="CondidateCpassword" style="width:250px;height:40px;margin-left:30px;margin-top:15px;" >
                   <input type="text" placeholder="Alternate email" name="CondidateAlterEmail" class="email" style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                   <input type="text" placeholder="Phone Number" name="CondidatePhoneNumber" class="email" style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                   <button type="submit" name="submit" class="btn" >Register</button>        
            </form>
            <p style="margin-left: 304px;margin-top: 5px;">Or</p>
            <div class="line1"></div>
            <div class="line2"></div>
            <img src="./components/google.png" alt="Google" class="links">
            <img src="./components/instagram 1.png" alt="Instagram" class="links">
            <img src="./components/twitter.png" alt="Twitter" class="links">  
            <img src="./components/message 1.png" alt="Twitter" class="links2" style="margin-left: 4rem !important;margin-top: 2rem !important">
            <h1 style=" margin-top: -12rem !important;word-spacing: 1rem;margin-left: 23rem !important;">Suscribe for newsletter and Updates</h1>    
            <img src="./components/approved 1.png" alt="Twitter" class="links" style="margin-top: 76px;">
        <p id="approved" style="color: black;word-spacing: 4px;font-size: 1.50rem; font-weight: 500;margin-left: 197px; margin-top:-55px">“Updates related to HR profile, newsletters and Jobs will be delivered direct to your mail box”.</p>
        </div>
        
    </div>
</body>

</html>