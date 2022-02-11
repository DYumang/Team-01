<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/joinquiz.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Luckiest+Guy&family=Passion+One:wght@700&family=Rowdies&family=Teko:wght@500&display=swap" rel="stylesheet">
    <title>QuizHub | Join Quiz</title>
    </head>
    <body>
        <p>
			<?php
			if(isset($msg)){
				echo $msg;
			}
			?>
		</p>
        <div class="main">
            <nav>
                <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
                <ul>
                    <li><a href="<?php echo site_url('Welcome/Home'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('Welcome/Study'); ?>">Study Tips</a></li>
                    <li><a href="<?php echo site_url('Welcome/Profile'); ?>">Profile</a></li> 
                <li><a href="<?php echo base_url('Welcome/LogoutController');?>">Logout</a></li>
                </ul>
            </nav>

            <div class="custom-shape-divider-bottom-1644490778">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
        </div>

        <div class="center">
            <h1 class="title">Take A Quiz!</h1>
            <form method="post" action="<?php echo base_url('ExamController/enterquizcode');?>">
                <p><?php echo validation_errors(); ?></p>
                <div class="txt_field">
                    <input type="text" name="attempt_code" id="attempt_code" placeholder="Enter Your Quizcode"><br>
                </div>
                <div>
                <input type="submit" name="submit" value="Submit Form">
                </div>
            </form>
            <img src="<?php echo base_url();?>assets/images/study.png" class="image">
        </div>        
    </body>
</html>