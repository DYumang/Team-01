<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/joinquiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <li><a href="<?php echo site_url('ExamController/Join');?>">Join Quiz</a></li>
                    <li><a href="#">Quiz List</a></li>
                    <li><a href="<?php echo site_url('Welcome/Study'); ?>">Study Tips</a></li>
                    <li><a href="<?php echo site_url('Welcome/Profile'); ?>">Profile</a></li> 
                <li><a href="<?php echo base_url('Welcome/LogoutController');?>">Logout</a></li>
                </ul>
            </nav>
        <div class="center">
            <h1 class="title">Take A Quiz!</h1>
            <form method="post" action="<?php echo base_url('ExamController/AnswerQuiz');?>">
                <p><?php echo validation_errors(); ?></p>
                <div class="txt_field">
                    <input type="text" name="attempt_code" id="attempt_code" placeholder="Enter Your Quizcode"><br>
                </div>
                <div>
                <input type="submit" name="submit" value="Submit Form">
                </div>
            </form>
        </div>        
    </body>
</html>