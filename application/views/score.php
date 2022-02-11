<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/userProfile.css');?>">
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
                <img src="<?php echo base_url();?>assets/images/logo.png"  class="logo">
                    <ul>
                        <li><a href="<?php echo site_url('welcome/Home'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('ExamController/Join'); ?>">Join Quiz</a></li>
                        <li><a href="<?php echo site_url('welcome/Study'); ?>">Study Tips</a></li>
                        <li><a href = "<?php echo site_url('welcome/Profile'); ?>">Profile</a></li>
                        <li><a href="<?php echo base_url('welcome/LogoutController');?>">LOGOUT</a></li>
                    </ul>
            </nav> 
        
            <div class="tabs">
                
                <input type="radio" name="name" checked>
                <div class="content">
                        <div class="title">
                        Your score is 
                        </div> 
                        <div align="center" class="trial">
                            <h1> 
                                <?php
                                    echo ucfirst($data['exam_title']); 
                                    echo "\r\n";
                                    echo "\r\n"; echo "-"; 
                                    echo "\r\n";
                                    echo "\r\n";    
                                    echo ucfirst($data['score']); echo "\r\n"; 
                                    echo "out of"; echo "\r\n";                                   
                                   echo ucfirst($data['sum(`total_question`*`marks_if_right`)']); 
                                ?>
                           </h1>
                        </div>
                </div>
               
        </div>
    </body>
</html>             