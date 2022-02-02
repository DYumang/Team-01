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
    </head>

    <body>
        <div class="hero">
            <nav>
                <img src="<?php echo base_url();?>assets/images/logo.png"  class="logo">
                    <ul>
                        <li><a href="<?php echo site_url('welcome/Home'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('ExamController/Join'); ?>">Join Quiz</a></li>
                        <li><a href="#">Quiz List</a></li>
                        <li><a href="<?php echo site_url('welcome/Study'); ?>">Study Tips</a></li>
                        <li><a href = "<?php echo site_url('welcome/Profile'); ?>">Profile</a></li>
                        <li><a href="<?php echo base_url('welcome/LogoutController');?>">LOGOUT</a></li>
                    </ul>
            </nav> 
            <div class="tabs">
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
                                    echo ":D ";
                                ?>
                            </h3>
                        </div>
                </div>
                <input type="radio" name="name" >
                <div class="content">
                    <div class="title">
                        User Profile Update
                    </div>
                    <div class="form" align="center">
                        <form method="post" action="<?php echo site_url('Update')?>">
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
                                <i class="fas fa-user"></i>
                                <input type="date" placeholder="Birthdate" name="birthdate" ><br /><br />
                            </div>                            
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Old Pass" name="old_pass" id="name" required><br /><br />
                            </div>
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="New Password" name="new_pass" id="password" required><br /><br />
                            </div>
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirm Password" name="confirm_pass" id="password" required><br /><br />
                                <input class="button-52" role="button" type="submit" value="update" name="profile_update"/>
                            </div>                    
                        </form> 
                    </div>
                </div>
                <input type="radio" name="name" >
                    <div class="content">
                        <div class="title">
                            Quiz List (interacted/answered)
                        </div>
                    </div>
                <input type="radio" name="name" >
                <div class="content">
                    <div class="title">
                        Quiz List (created)
                    </div>
                </div>      
        </div>
    </body>
</html>             