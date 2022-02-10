<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/invalidstyle.css">
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
                        <div align="center" class="trial">
                            <h1> 
                                <?php
                                    echo ucfirst("I"); 
                                    echo ucfirst("N"); 
                                    echo ucfirst("V"); 
                                    echo ucfirst("A"); 
                                    echo ucfirst("L"); 
                                    echo ucfirst("I"); 
                                    echo ucfirst("D"); 
                                    echo "\r\n";
                                    echo "\r\n"; 
                                    echo ucfirst("I"); 
                                    echo ucfirst("N"); 
                                    echo ucfirst("P"); 
                                    echo ucfirst("U"); 
                                    echo ucfirst("T"); 
                                ?>
                               
                           </h1> 
                           <a href="<?php echo site_url('welcome/Profile');?>">TRY AGAIN</a>
                        </div>
                </div>
               
        </div>
    </body>
</html>             