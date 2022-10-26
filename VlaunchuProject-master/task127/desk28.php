<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desk28.css">
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>VlaunchU</title>
</head>
<body>
    <div class="paymentCard">
        <p class="headtext">Credit card/Debit card</p>
        <p class="upi">UPI</p>
    </div>
    <form action="">
    <div class="paymntform">
            <div class="inputtext">
            <p class="title">Card Number</p>
            <input type="text" class="inputext" placeholder="">
            
            <div class="inputtext2">
            <p class="title2">Card Holder Name</p>
            <input type="text" class="inputext" placeholder="">
            </div>
            </div>
            <div class="expiredate">
            <p class="expidate">Expiry Date</p>
            <input type="text" class="expInput" value="Month">
            <input type="text" class="expInput2" value="Year">
            </div>
            <div class="cvvcontainer">
            <p class="CVV">CVV</p>
            <input type="text" class="cvvInput" placeholder="">
            <button type="button" >MAKE PAYMENT</button>

        </div>

        <div class="upipayment">
        <p class="upitext">Enter Your Virtual Payment Address</p>
            <input type="text" class="upiInput" value="e.g yourname@bank">
            <button type="button" id="btn">MAKE PAYMENT</button>
            
        </div>
        </form>
        
    </div>
</body>
</html>