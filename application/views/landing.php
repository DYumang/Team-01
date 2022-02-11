<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizHub</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/landing.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Luckiest+Guy&family=Passion+One:wght@700&family=Rowdies&family=Teko:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="hero">
        <nav>
            <img src="<?php echo base_url('assets/images/logo.png');?>" class="logo">
            <ul>
                <li><a href="<?php echo site_url('Welcome/Login')?>">Log in</a></li>
                <li><a href="<?php echo site_url('Welcome/AboutFunction')?>">About Us</a></li>
            </ul>
        </nav>
        <div class="detel">
            <h1>Welcome<span> POV: Studying</span></h1>
            <p>a learning platform that uses gamification to make <br> content immersive, engaging and fun</p><br>
            <div class="button">
            <a href="<?php echo site_url('welcome/index')?>">GET STARTED</a>
            </div>
        </div>
        <div class="images">
            <img src="<?php echo base_url('assets/images/shape3.png');?>" class="shape3">
             <img src="<?php echo base_url('assets/images/logo.png');?>" class="girl">
        </div>
    </div>
</body>
</html>