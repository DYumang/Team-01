<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/quizform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>QuizHub | Create Quiz</title>
    </head>
        <body>
    <div class = "main">
    <nav>
            <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
            <ul>
                <li><a href="<?php echo site_url('Welcome/Home'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('Welcome/Join');?>">Join Quiz</a></li>
                <li><a href="#">Quiz List</a></li>
                <li><a href="<?php echo site_url('Welcome/Study'); ?>">Study Tips</a></li>
                <li><a href="<?php echo site_url('Welcome/Profile'); ?>">Profile</a></li>
                <li><a href="<?php echo base_url('Welcome/LogoutController');?>">Logout</a></li>
            </ul>
        </nav>
        <p>
            <?php
            if(isset($msg)){
                echo $msg;
            }
            ?>
        </p>
        <div class = "container">
        <p><?php echo validation_errors(); ?> </p>
            <h1>Quiz Form Entry</h1>
            <form method="POST" action="<?php echo base_url('ExamController/addquestions/'.$exam_id);?>">
            <input type="hidden" name="exam_id" value="<?=$exam_id?>">
            <?php 
            $opt = 4;
            for($i=1;$i<=$total_question;$i++){ ?>
                <br><br><label>Enter Question <?=$i?></label><br>
                <input type="text" name="questions[<?=$i?>][name]"  placeholder="Insert Question '<?=$i?>' Here">
                <ol type="A">
                <?php for($j = 1; $j <= $opt; $j++) { ?>
                    <li> Option <?=$j?>:<input type="text" name="questions[<?=$i?>][options][<?=$j?>]" placeholder="Option <?=$j?>" id="<?=$i.$j?>"> </li>
                <?php } ?>
                </ol><br>
                <label>Assign Answer for Question <?=$i?>: </label><br>
                <select id="answer[<?=$i?>]" name="questions[<?=$i?>][answer]" >
                
                    <option value="" selected>Select Answer</option>
                    <?php for($j = 1; $j <= $opt; $j++) { ?>
                        <option value="<?=$j?>"> option <?=$j?></option>
                    <?php } ?>  
                </select>
            <?php } ?>
        </div>
            <div>
            <input type="submit" value="Submit Form">
            </div>
            </form>
    </div>
    </body>
</html>