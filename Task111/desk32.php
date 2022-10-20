<?php
include_once 'config.php';
$sql="SELECT * FROM `vlaunchjob`";
$res=mysqli_query($conn,$sql);
$row=mysqli_num_rows($res); 
 echo $row;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VlaunchU</title>
</head>
<body>
    <header class="navbar">
    <div class="logo">
    <img src="image 1.png" alt="#" class="logoimg" >
    <div class="searchbar">
    <p class="searchjobs">Search Jobs</p>
    <input type="text" class="Search-Input" placeholder="Search jobs by Skills,Designation,Companies">
    <button type="button" class="btn">Search</button>
    </div>
    <img src="image 7.svg" alt="#" class="homeimg" >
   
   
</div>
<div class="navheader">
<button class="navtab">VlaunchU</button>
<img src="image 8.png" alt="#" class="" style="margin-left:213px;margin-top:-15px" >
<img src="image 9.png" alt="#" class="closebtn" >
<a class="textquto" href="#">MY PROFILE</a>
<a class="textquto" href="#">CHANGE PASSWORD</a>
<a class="textquto" href="#">EDIT PROFILE</a>
<a class="textquto" href="#">LOGOUT</a>
</div>
<div class="profile-container">
    <h5 style="margin-top:99px;margin-left: 94px;font-size:30px">Akhib</h5>
    <p style="margin-top:10px;margin-left: 33px;font-size:13px">CS at ATME COLLEGE OF ENGINEERING</p>
    <p style="margin-top:39px;margin-left:52px;color:white;"> profile completed  100%</p>
    <div class="progress-bar"></div>
</div>
</header>
<div class="jobsDsc">
    <p class="jobs">Jobs</p>
    <p>34 New Recommended Job(s)</p>
</div>


<?php
 while($num=mysqli_fetch_assoc($res)){
    
?>

<div class="box-container">
    <button class="open">Open</button>
    <p class="info"> <?php echo $jobtitle=$num['JobTitle']?></p>
    <p id="info1"> Description - <?php echo $jobtitle=$num['Jobdescription']?></p>
    <p class="jobDetail">Openings -<?php echo $jobtitle=$num['NoOfOpening']?></p>
     <p class="location"> Location - <?php echo $jobtitle=$num['JobLocation']?></p>
     <p class="location"> Contact - <?php echo $jobtitle=$num['PhoneNumber']?></p>
     <p class="location"> Email - <?php echo $jobtitle=$num['Email']?></p>
     <img src="Vector.png" class="vector" alt="">
    <p  class="package">Package - <?php echo $jobtitle=$num['Salary']?></p>
    <p class="report">Report</p>
    <p class="package1"> Posted 5 days ago</p>
    <a href="#" class="viewlink">View All</a>   
    
    
<div class="left-box">
<p class="info">VlaunchU </p>
    <p id="info1" style="line-height:10px"> Fast Forward</p>
    <p class="info1">Speed up your Carrier</p>
     <p class="location"> Location - Hyderabad/Secunderabad, Bangalore/Bengaluru,(WFH during Covid)</p>
     <img src="Vector.png" class="vector" alt="">
    <p  class="package">300,000 - 350,000 PA</p>
    <a href="#" class="viewlink">KNOW MORE</a>  
</div>
<?php
}


?>
</div>
</body>
</html>