<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/exam.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>QuizHub | Quiz Details</title>
    </head>
    <body>

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
            <h2>Enter Quiz Details</h2>
            <form method="post" action="<?php echo base_url()?>ExamController/addDetails" >
            <?php echo validation_errors();?>
            <div class="txt_field">
                <input type="hidden" name="exam_id" id="exam_id">
                    <input type="text" name="exam_title" id="exam_title" required placeholder="Enter Quiz Title">    
                </div>
                <div class="txt_field">
                    <input type="number" name="total_question" id="total_question" required
                    placeholder="Enter total number of questions">
                </div>
                <div class="txt_field">
                    <input type="number"  name="marks_if_right" id="marks_if_right" required
                    placeholder="Enter marks on correct answer">
                </div>
                <div class="txt_field">
                    <input type="number" name="marks_if_wrong" id="marks_if_wrong" required
                    placeholder="Enter minus marks on wrong answer">
                </div>
                <div class="txt_field">
                    <input type="text" name="exam_code" id="exam_code" required
                    placeholder="exam code 8 characters only">
                </div>
                <div>
                    <input type="submit" name="submit" value="Submit Form">
                </div>
            </form>
        </div>
    </body>
</html>