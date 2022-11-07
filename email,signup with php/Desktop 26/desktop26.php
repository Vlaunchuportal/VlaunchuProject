<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desktop 26</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .nav {
            position: absolute;
            width: 465px;
            height: 100vh;
            left: 5px;
            top: 0px;
            background-color: skyblue;
            padding-left: 37px;
            text-align: center;
            padding-top: 15px;
        }

        .img {
            justify-content: center;
            text-align: center;
            margin-bottom: 70px;
        }

        .img hr {
            width: 364px;
            height: 7px;
            left: 14px;
            top: 27px;
            margin-left: 5px;
            background: #005203;
        }

        .navbar hr {
            /* position: absolute; */
            width: 304px;
            height: 3px;
            left: 14px;
            top: 301px;

            background: #005203;
        }

        .line {
            position: absolute;
            width: 127px;
            height: 0px;
            left: 425px;
            top: 37px;

            border: 4px solid #000AFF;
            transform: rotate(90deg);
        }

        .sign {
            position: absolute;
            width: 158px;
            height: 116px;
            left: 512px;
            top: -21px;

            font-family: 'K2D';
            font-style: italic;
            font-weight: 700;
            font-size: 48px;
            line-height: 116px;
            /* identical to box height, or 242% */

            letter-spacing: -0.02em;

            color: #000AFF;

        }

        .page {
            position: absolute;
            width: 70px;
            height: 116px;
            left: 512px;
            top: 26px;
            font-family: 'K2D';
            font-style: italic;
            font-weight: 400;
            font-size: 32px;
            line-height: 116px;
            /* identical to box height, or 362% */

            letter-spacing: -0.02em;

            color: #000AFF;
        }

        .search {
            position: absolute;
            width: 720px;
            height: 57px;
            left: 580px;
            top: 185px;
            border-radius: 42px;
            border: 1px solid;
        }

        .search button {
            float: right;
            background: blue;
            color: white;
            margin-top: 7px;
            margin-right: 20px;
            padding: 9px;
            border-radius: 17px;
            width: 90px;
        }

        input {
            border: none;
            margin-left: 32px;
            margin-top: 15px;
            color: red;
            font-size: larger;
            outline: none;
        }

        .frame {
            position: absolute;
            left: 578.64px;
            right: 3.35%;
            top: 45.52%;
            bottom: 3.01%;
            background: #FFFFFF;
            box-shadow: 0px 3px 32px rgb(0 0 0 / 42%);
            border-radius: 32px;
            width:150%;
        }

        .reg {
            position: absolute;
            left: 18.25%;
            right: 18.14%;
            top: 30.86%;
            bottom: 55.22%;
            color: white;
            background: #1E2775;
            border-radius: 104px;
            text-align: center;
            padding-top: 11px;
        }

        .paragraph {
            position: absolute;
            left: 18%;
            right: 13.85%;
            top: 50.36%;
            bottom: 22.89%;
            font-family: 'Inter';
            font-style: italic;
            font-weight: 500;
            font-size: 20px;
            line-height: 70%;
            text-align: center;
            letter-spacing: -0.03em;
            color: #000000;
            text-decoration: none;
        }
        a{
            text-decoration: none;
        }

        li {
            font-family: 'Inter',;
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            list-style: none;
            margin-left: -10px;
           
        }
        li a{
            color: #000000;
        }
      hr{
        color: #005203;
      }
    </style>
</head>

<body>
    <div class="container">
        <div class="nav">
            <div class="img">
                <hr>
                <img src="VLAUNCHU.png" alt="">
                <img src="BUSINESS LAUNCH.png" alt="">
                <hr>
            </div>
            <div class="navbar">
                <ul>               
                <li>              
                 <a href="#">Why VLaunchU</a> 
                </li>
                <hr>
                <li>              
                 <a href="#">Solutions</a> 
                   </li>
                   <hr>
                   <li>              
                    <a href="#">Blog</a> 
                   </li>
                   <hr>
                   <li>              
                    <a href="#">Enterprise</a> 
                   </li>
                   <hr>
                   <li>              
                    <a href="#">Projects</a> 
                   </li>
                   <hr>
                     
                </ul>
        </div>
        <header>

            <div class="line"></div>
            <div>
                <div class="sign">Sign up</div>
                <div class="page">Page</div>
            </div>
        </header>
        <div class="search">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>

        <div class="frame">
            <div class="reg">Register successfully</div>
            <div class="paragraph">
                <p>Please check your registered email for confirmation of the account</p>
                <p>Go to <a href="#" style="color:blue ;">Home Page</a></p>
            </div>
       
        </div>
       
    </div>
</body>

</html>


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
