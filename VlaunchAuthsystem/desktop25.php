<?php
include_once '../authsystem/config.php';
$showAlert=false;
if($_SERVER["REQUEST_METHOD" ]=="POST"){
   
    $email=$_POST["email"];
    $ConfermMail=$_POST["Cemail"];
    $password=$_POST["password"];
    $Cpassword=$_POST["cpassword"];
    $alternatEmail=$_POST["alterEmail"];
    $PhoneNumber=$_POST["phoneNumber"];
if($password==$Cpassword && $email==$ConfermMail){
   //$hashpassword= password_hash( $password,PASSWORD_DEFAULT);
    $sql= "INSERT INTO `signupdata` (`id`, `email`, `password`, `alternateEmail`, `phoneNumber`) VALUES (NULL, '$email', '$password', '$alternatEmail', '$PhoneNumber');";
     $resutl=mysqli_query($conn, $sql);
     if($resutl){
        $showAlert=true;
        header("location:desktop26.php");
    }
          
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

    <title>SignUp Recruiter</title>
    <link rel="stylesheet" href="./css/csss.css">
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
                <ul>
                    <hr>
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
                <div class="Recruiter">as a Recruiter</div>
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
            <form action="desktop25.php" method="POST">
                <h1 style="margin-left:250px;">SignUp</h1>
                <p style="margin-left:250px;margin-top:-12px;" >as a Recruiter</p>
                <input type="email" placeholder="Email" class="email" name="email" style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                 <input type="email" placeholder="Confirm Email" class="email" name="Cemail"  style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                  <input type="password" placeholder="Password" name="password" class="email"  style="width:250px;height:40px;margin-left:46px;margin-top:15px;" >
                   <input type="password" placeholder="Confirm Password" class="email" name="cpassword" style="width:250px;height:40px;margin-left:30px;margin-top:15px;" >
                   <input type="text" placeholder="Alternate email" name="alterEmail" class="email" style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                   <input type="text" placeholder="Phone Number" name="phoneNumber" class="email" style="width:600px;height:40px;margin-left:25px;margin-top:15px">
                   <button type="submit" name="btn" class="btn" >Register</button>
                   <hr style="50px">
                   <hr>
            </form>
            
        </div>
        
    </div>
</body>

</html>