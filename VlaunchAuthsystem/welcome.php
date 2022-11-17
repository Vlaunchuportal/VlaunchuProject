<?php
include "config.php";
$login=false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
 $sql = "SELECT * FROM `signupdata` WHERE binary email ='$email' and password='$password'";
 //$sql = "SELECT * FROM `signupdata` WHERE binary email ='$email'";
  $resutl = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($resutl);
  if ($row == 1) {
   /* while($row= mysqli_fetch_assoc($resutl)){
    if(password_verify($password,$row['password']))  
    $login=true;  
  }  */
    session_start();
    $_session['signIn']= true;    
    $_SESSION['$email']= $email;
    header("location:login.php");
 

  }else {
    echo'
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Alert:</strong> Your password and mail are invailed.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  }

}

?>
<!doctype html>
<html lang="en">

<head>

  <link rel="stylesheet" href="./css/css1.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <title>LogIn</title>
</head>

<body>
  <nav>
    <div class="container-nav">
      <ul>
        <li><a href="#" class="mx-3">Why VLaunchU</a></li>
        <li><a href="#" class="mx-3">Solutions</a></li>
        <li><a href="#" class="mx-3">Blog</a></li>
        <li><a href="#" class="mx-3">Enterprise</a></li>
        <li><a href="#" class="mx-3">Projects</a></li>
      </ul>
      <!-- Example single danger button -->
      <div class="btn-group" style="margin-left: 1184px;margin-top: 26px;">
        <button type="button" class="btn btn-success  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          SignUp
        </button>
        <ul class="dropdown-menu" style="height:100px">
          <li><a class="dropdown-item" href="desktop25.php" style="margin-top:-30px">Recruiter</a></li>
          <li><a class="dropdown-item" href="Condidate.php" style="margin-top: -60px;">Condidate</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="back"></div>
  <form action="welcome.php" method="POST">
    <div class="form-control my-5 bg-white mx-5 " id="form-container">
      <h1 style="margin-left: 84px;margin-top: 27px;">Sign in</h1>
      <div class="dropdown">
        <button class="btn  dropdown-toggle my-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
          aria-expanded="false" style="margin-left: 84px;margin-top: 27px;">
          Candidate
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="desktop25.php"> Recruiter</a></li>
          <li><a class="dropdown-item" href="Condidate.php">Admin</a></li>

        </ul>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary rounded-pill mx-5 " id="submit">Sign In</button>
        <div class="line"></div>
        <p style="color:black;margin-left: 138px;margin-top: 15px;">Or</p>
        <div class="line1"></div>
        <div class="links">
          <img src="./components/google.png" alt=""
            style="height: 40px;width: 40px;margin-left: 76px;margin-top: -16px;">
          <img src="./components/facebook.png" alt=""
            style="height: 40px;width: 40px;margin-top: -16px;background: transparent;">
          <img src="./components/twitter.png" alt=""
            style="height: 40px;width: 40px;margin-top: -16px;margin-left: 9px;">
        
        </div>
      </div>
  </form>
  </div>

  <div>
    <p class="quto">
      “To constantly over deliver and satisfy our clientele with the most professional and cost effective solutions for
      all their business resource needs.”
    </p>
    <div class="input-group mb-3">
      <input type="text" class="form-control rounded-pill" placeholder="Recipient's username"
        aria-label="Recipient's username" aria-describedby="button-addon2"
        style="width: 414px;position: absolute;margin-left: 685px;height: 46px; ">
      <button class="btn btn-success rounded-pill" type="button" id="button-addon2"
        style="/* width: 414px; */position: absolute;margin-left: 992px;top:4px ">Subscribe</button>
      <div class="radiobtn">
        <input type="checkbox" style="margin-left: 705px;margin-top: 73px;">Projects
        <input type="checkbox">Customize everything
        <input type="checkbox">Free FIles
      </div>
    </div>
  </div>
  <div class="footer">
    <p style="margin-left: 1068px;">Our Mail : Abcd198@gmail.com</p>
    <p style="margin-left: 1070px;margin-top: -5px;">Join us Through :</p>
    <img src="./components/whatsapp.png" alt="" style="width:25px;margin: -81px 0px 0px 1204px;">
    <img src="./components/instagram 1.png" alt="" style="width:25px;height:25px;margin-top: -81px;">
    <img src="./components/twitter.png" alt="" style="width:25px;height:25px;margin-top: -81px;">
    <img src="./components/youtube 1.png" alt="" style="width:25px;height:25px;margin-top: -81px;">
  </div>
</body>

</html>