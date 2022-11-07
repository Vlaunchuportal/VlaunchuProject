<?php
include_once 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css3.css">
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <ul>
                <li class="logo">V</li>
                <li class="logo">launch</li>
                <li class="logo">U</li>
                <li class="logo">Mail</li>
            </ul>
            <div class="profile">
                <p style="color:white;font-weight: 700;margin: -7px 0px -11px -77px;font-family:'Ubuntu';">
                    Abcd123@gmail.com</p>
                <button class="button">Sign Out</button>
                <img src="../desktop23/components/man 1.png" alt="profile"
                    style="width:50px;height:50px;margin: -35px -51px -19px 19px;">
            </div>
        </nav>
        <div class="container-2">
            <div class="navbar-2">
                <ion-icon name="arrow-back-circle-outline" style="width:50px;height:50px"></ion-icon>
                <input type="search" placeholder="Search your Mail" class="search-bar">
                <span id="Search-btn">Search</span>
            </div>
            <input type="checkbox" class="checkbox" style="background-color: transparent;">
            <a href="#" class="tag">Delete Message</a>
            <a href="#" class="tag" style="margin-left:371px;color:black">Mark as Read/Unread</a>
            <ul>
                <li><a href="">
                 <
                </li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">...></a></li>
                <li><a href="" style="margin-left:41px">
                        < Previous</a>
                </li>
                <li><a href="" style="margin-left:20px"> Next ></a></li>
            </ul>
            <div class="content-container">
                <input type="checkbox" style="margin:-21px">
                <img src="../desktop23/components/Rectangle.png" alt="icon"
                    style="width:30px;height:30px;margin: 15px 0px -8px 80px;">
                <h2 class="mail-title" style="margin-top:-31px;font-size: 21px;">Zomato</h2>
                <p class="mail-cotent">However, you can contact them through chat support or via email at
                    info@zomato.com.</p>
                <div class="content-container" style="margin-left:-148px;margin-top: -179px;">
                    <div class="image">
                        <img src="../desktop23/components/7872898 1 (1).png" alt="">
                        <img src="../desktop23/components/reply (1) 1.png" alt="">
                        <img src="../desktop23/components/star 1.png" alt="">

                    </div>

                    <input type="checkbox" style="margin:-21px">
                    <img src="../desktop23/components/Rectangle.png" alt="icon"
                        style="width:30px;height:30px;margin: 15px 0px -8px 80px;">
                    <h2 class="mail-title" style="margin-top:-27px;font-size: 21px;">Google</h2>
                    <p class="mail-cotent">We noticed a new sign-in to your Google Account on a Google Pixel 2 device.
                        If this was you, you don’t need to do anything. </p>
                    <div class="content-container" style="margin-left:-148px;margin-top: -179px;">
                        <div class="image">
                            <img src="../desktop23/components/7872898 1 (1).png" alt="">
                            <img src="../desktop23/components/reply (1) 1.png" alt="">
                            <img src="../desktop23/components/star 1.png" alt="">
                        </div>





                        <input type="checkbox" style="margin:-21px">
                        <img src="../desktop23/components/Rectangle.png" alt="icon"
                            style="width:30px;height:30px;margin: 15px 0px -8px 80px;">
                        <h2 class="mail-title" style="margin-top:-28px;font-size: 21px;">Amazon</h2>
                        <p class="mail-cotent">Amazon Simple Email Service (SES) is a cost-effective, flexible, and
                            scalable email service that enables developers to sends. </p>
                        <div class="content-container" style="margin-left:-148px;margin-top: -179px;">
                            <div class="image">
                                <img src="../desktop23/components/7872898 1 (1).png" alt="">
                                <img src="../desktop23/components/reply (1) 1.png" alt="">
                                <img src="../desktop23/components/star 1.png" alt="">
                            </div>

                            <div class="content-container" style="margin-left:-148px;margin-top: -160px;">

                                <img src="../desktop23/components/Rectangle.png" alt="icon"
                                    style="width:30px;height:30px;margin: -101px 0px 7px 51px;">
                                <h2 class="mail-title" style="margin-top:-88px;font-size: 21px;">Swiggy</h2>
                                <p class="mail-cotent">Order food online from restaurants and get it delivered. Serving
                                    in Bangalore, Hyderabad, Delhi, Gurgaon.....</p>
                                <div class="image" style="margin-top:-44px">
                                    <img src="../desktop23/components/7872898 1 (1).png" alt="">
                                    <img src="../desktop23/components/reply (1) 1.png" alt="">
                                    <img src="../desktop23/components/star 1.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-footer">
                <img src="../desktop23/components/outbox 1.png" class="icons" alt="">
                <p>outbox</p>
                <img src="../desktop23/components/inbox  1.png" class="icons" alt="">
                <p>inbox</p>
                <img src="../desktop23/components/Button Icon.png" style=" margin-top:1px;" class="icons" alt="">
                <img src="../desktop23/components/trash 1.png" class="icons" alt="">
                <p>outbox</p>
                <img src="../desktop23/components/box 1.png" class="icons" alt="">
                <p>outbox</p>





            </div>


</body>

</html>