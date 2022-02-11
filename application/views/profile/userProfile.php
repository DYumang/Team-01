<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/userProfile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Luckiest+Guy&family=Passion+One:wght@700&family=Rowdies&family=Teko:wght@500&display=swap" rel="stylesheet">
        <title>QuizHub | UserProfile</title>
    </head>

    <body>
        <div class="hero">
            <nav>
                <img src="<?php echo base_url();?>assets/images/logo.png"  class="logo">
                    <ul>
                        <li><a href="<?php echo site_url('welcome/Home'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('ExamController/Join'); ?>">Join Quiz</a></li>
                        <li><a href="<?php echo site_url('welcome/Study'); ?>">Study Tips</a></li>
                        <li><a href="<?php echo base_url('welcome/LogoutController');?>">LOGOUT</a></li>
                    </ul>
            </nav> 
            <div class="tabs">
            <!-- TAB1 -->
                <input type="radio" name="name" checked>
                <div class="content">
                        <div class="title">
                        User Profile
                        </div> 
                        <div align="center" class="trial">
                            <h1> 
                                <?php
                                   echo ucfirst($profile->firstName);  echo "\r\n";
                                   echo ucfirst($profile->lastName); echo "\r\n";
                                ?>
                           </h1>

                            <h2><span>
                                <?php 
                                    echo "@";
                                    echo $profile->username;
                                    echo "\r\n";
                                    echo "\r\n";
                                ?>
                                
                            </span></h2> 
                            <h3>
                                <?php
                                    echo "<br>";
                                    echo "Born on ";
                                    echo ucfirst($profile->birthdate);
                                    echo "<br>";
                                ?>
                            </h3>
                        </div>
                </div>
            <!-- TAB2 -->
                <input type="radio" name="name" >
                <div class="content">
                    <div class="title">
                        User Info Update
                    </div>
                    <div class="form" align="center">
                        <form method="post" action="<?php echo site_url('Welcome/UpdateInfo')?>">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Lastname" name="lastName" ><br /><br />
                            </div>
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Firstname" name="firstName" ><br /><br />
                            </div>
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Username" name="username" ><br /><br />
                            </div>
                            <div class="row">
                                <i class="fas fa-birthday-cake"></i>
                                <input type="date" placeholder="Birthdate" name="birthdate" ><br /><br />
                                <input class="button-52" role="button" type="submit" value="update" name="profile_update"/>
                            </div>                    
                        </form> 
                    </div>
                </div>
            <!-- TAB3 -->
                <input type="radio" name="name" >
                <div class="content">
                    <div class="title">
                        User Password Update
                    </div>
                    <?php echo @$error; ?>
                    <div class="form" align="center">
                        <form method="post" action='<?php echo site_url('Update')?>'>
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="old_pass" id="name" placeholder="Old Pass"/><br /><br />
                            </div>
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="new_pass" id="password" placeholder="New Password"/><br/><br />
                            </div>
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="confirm_pass" id="password" placeholder="Confirm Password"/><br/><br />
                                <input class="button-52" type="submit" value="update" name="change_pass"/><br />
                                <!-- <input  role="button" type="submit" value="update" name="change_pass"/> -->
                            </div>                    
                        </form> 
                    </div>
                </div>               
            </div>
        </div>
    </body>
</html>             