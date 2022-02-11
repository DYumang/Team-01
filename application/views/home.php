<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>QuizHub | Sign Up</title>
  </head>
  <body>
    <a href="<?php echo site_url('Welcome/Landing')?>">
    <img src="<?php echo base_url('assets/images/logo.png');?>" class="logosignup" width="z100px" height="100px" >
    </a>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>SIGN UP Form</span></div>
        <form method="post" autocomplete="off" action="<?php echo site_url('Welcome/RegisterNow')?>">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Lastname" name="lastName" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Firstname" name="firstName" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="row">
          <i class="fas fa-cake-candles"></i>
            <input type="date" placeholder="Birthdate" name="birthdate" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
        <h4 style="color: gray; text-align: center;"> Your email must be verified before you can log-in </h4> <br>
          <div class="row button">
            <input type= "submit" value="SignUp">
          </div>            
        </form>
      </div>
    </div>
  </body>
</html>
