
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/userProfile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="hero">
            <nav>
                <img src="<?php echo base_url();?>assets/images/logo.png"  class="logo">
                    <ul>
                        <li><a href="<?php echo site_url('welcome/Home'); ?>">Home</a></li>
                        <li><a href="#">Join Quiz</a></li>
                        <li><a href="#">Quiz List</a></li>
                        <li><a href="<?php echo site_url('welcome/Study'); ?>">Study Tips</a></li>
                        <li><a href = "<?php echo site_url('welcome/Profile'); ?>">Profile</a></li>
                        <li><a href="<?php echo base_url('welcome/LogoutController');?>">LOGOUT</a></li>
                    </ul>
            </nav> 


            <div align="center" class="trial">
                <h1> 
                    <?php

                        $profile = array();
                        $session =$this->session->userdata();
                        $id = $session['id'];
                        $queryy = $this->db->query("SELECT * FROM tbl_name WHERE id='$id'");
                        $profile['username'] = $queryy->row()-> {'username'};  

                        if($queryy->num_rows()!=0){
                            $profile = $queryy->row_array();
                        }

                        echo ucfirst($profile['firstName']); echo "\r\n";
                        echo ucfirst($profile['lastName']); echo "\r\n";
                    ?>
                </h1>

                <h2><span>
                    <?php 
                        echo "@";
                        echo $profile['username'];
                    ?>
                </span></h2> 
                
                <div class="detel">
                    <a href= "<?php echo site_url('welcome/ProfileUpdate'); ?>">Update Info</a>
                </div>

            </div>    



          


        </div>
    </body>
</html>             