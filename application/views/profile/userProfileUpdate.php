<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizHub | Update</title>
    <link rel="stylesheet" href="<?php echo base_url();?> assets/css/userProfileUpdate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="hero">
        <nav>
            <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
            <ul>
            <li><a href = "<?php echo site_url('Welcome/Dashboard'); ?>">Home</a></li>
                <li><a href="#">Join Quiz</a></li>
                <li><a href="#">Quiz List</a></li>
                <li><a href = "<?php echo site_url('Welcome/Study'); ?>">Study Tips</a></li>
                <li><a href = "<?php echo site_url('Welcome/Profile'); ?>">Profile</a></li>
                <li><a href="<?php echo base_url('Welcome/LogoutController');?>">LOGOUT</a></li>
            </ul>
        </nav>
        <div align="center">
        <div class="wrapper">
        <div class="title"><span>Update Form</span></div>
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
            <i class="fas fa-user"></i>
            <input type="password" placeholder="Old Pass" name="old_pass" id="name" required><br /><br />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="password" placeholder="New Password" name="new_pass" id="password" required><br /><br />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="password" placeholder="Confirm Password" name="confirm_pass" id="password" required><br /><br />
            <input type="submit" value="update" name="profile_update"/><br />
          </div>

        
          </div>

        </form>
      </div>  
</body>
</html>