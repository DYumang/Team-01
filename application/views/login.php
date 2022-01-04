<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>login</title>
  </head>
  <body>
     <img src="<?php echo base_url();?>assets/images/logo.png" id="logologin" >
      <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
         <form method="post" action="<?php echo site_url('welcome/loginnow')?>">    
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
 

          <div class="row button">
            <input type= "submit" value="Login">

          <div class="signup-link">Not a member? <a href="<?php echo site_url('welcome/index')?>">Signup now</a></div>
        </form>
        <?php echo validation_errors();?>
      </div>
    </div>



  </body>
</html>
