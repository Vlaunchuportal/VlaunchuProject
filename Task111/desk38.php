<?php
if(isset($_POST['submit'])){
    include_once 'config.php';
    $JobTitle=$_POST['JobTitle'];
    $NoOfOpenings= $_POST['NoOfOpenings'];
    $location=$_POST['location'];
    $salary=$_POST['salary'];
    $jobInfo=$_POST['jobInfo'];
    $CompanyName=$_POST['CompanyName'];
    $ContactPerson=$_POST['ContactPerson'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email =$_POST['Email'];
    $sql="INSERT INTO `vlaunchjob` (`id`, `JobTitle`, `NoOfOpening`, `JobLocation`, `Salary`, `Jobdescription`, `CompanyName`, `ContactPersonNo`, `PhoneNumber`, `Email`) 
    VALUES (NULL, ' $JobTitle', '$NoOfOpenings', '$location', '$salary', '$jobInfo', '$CompanyName', '$ContactPerson', '$PhoneNumber', '$Email')";
    $result=mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VlaunchU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css3.css">
</head>

<body>
    <form class="myform" action="desk38.php" method="POST">
        <div class="container">
            <div id="image-logo ">
                <img src="image 1.png" alt="" style="margin-top:75px; width: 404px;height:97px;">
            </div>
            <h6 class="title">Project Details</h6>
            <div class="box-container">
                <div id="container1">
                    <div class="form-contro">
                        <p class="form-data">Job Title(*) </p>
                        <input type="text" style="margin-top: -10px;margin-left:-5px" name="JobTitle">
                        <p class="form-data">No. Of Openings(*) </p>
                        <input type="text" style="margin-top: 3px;margin-left:-5px" name="NoOfOpenings">
                        <p class="form-data">Job Location(Please Select the local from Dropdown)(*) </p>
                        <input type="text" style="margin-top: 50px;margin-left:-5px" name="location">
                        <p class="form-data"
                            style="Display:flex;justify-content: flex-end;margin-right: 238px;margin-top: -74px">
                        </p>
                        <input type="text"
                            style="margin-top: px;margin-left:274px; Display:flex;justify-content: flex-end;"
                            name="Location">
                    </div>
                    <h6 class="title" style="font-size:20px;margin-top:30px;color:black ">Additional Job Detais</h6>
                    <div id="box-container2">
                        <div class="form-contro">
                            <p class="form-data"> Monthly In-hand Salary * (Only Put Actual Salary)</p>
                            <input type="text" style="margin-top: -20px;margin-left:-5px" name="salary"> to
                            <p class="form-data"
                                style="Display:flex;justify-content: flex-end;margin-right: 238px;margin-top: -74px">
                            </p>
                            <input type="text"
                                style="margin-top: 44px;margin-left:290px; Display:flex;justify-content: flex-end;"
                                name="salary">
                            <p class="form-data" style="margin-top:50px"> Job Info / Job Description </p>
                            <input type="text" style="margin-top: -9px;margin-left:-5px" name="jobInfo">
                            <p style="margin-top:20px; margi-left:10px;">Remaining Character:350</p>
                        </div>
                        <div id="container3">
                            <div class="form-contro">
                                <p style="color:black;font-size:15px;margin-left:10px;margin-bottom: -1px;">Job
                                    Timings:
                                    9:30 am - 6:30pm | Monday to S...</p>
                                <p style="color:black;font-size:15px;margin-left:10px">Interview Details: 11:00 am -
                                    4:00pm | Monday to ...</p>
                            </div>
                            <h6 class="title" style="font-size:20px;margin-top:-145px  ;color:black ">About Your
                                Company
                            </h6>
                            <div id="container-4">
                                <div class="form-contro">
                                    <p class="form-data">Company Name* </p>
                                    <input type="text" style="margin-top: -20px;margin-left:-5px" name="CompanyName">
                                    <p class="form-data"
                                        style="Display:flex;justify-content: flex-end;margin-right: 165px;margin-top: -74px">
                                        Contact Person Number()*</p>
                                    <input type="text" name="ContactPerson"
                                        style="margin-top: px;margin-left:274px; Display:flex;justify-content: flex-end;">
                                    <p class="form-data">Phone Number* </p>
                                    <input name="PhoneNumber" type="text" style="margin-top: -20px;margin-left:-5px">
                                    <p class="form-data"
                                        style="Display:flex;justify-content: flex-end;margin-right: 238px;margin-top: -37px">
                                        Email-ID*</p>
                                    <input type="text" name="Email"
                                        style="margin-top: 0px;margin-left:274px;Display:flex;justify-content: flex-end;">
                                    <p class="form-data" style="margin-top:5px">RecruiterId </p>
                                    <input  name="Recri"/>
                                </div>
                                <input class="btn" name="submit" type="submit"
                                    style="background-color:white;color:black;margin-top:59px;margin-left:228px;width: 138px;height: 38px;margin-bottom: 34px;"></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>