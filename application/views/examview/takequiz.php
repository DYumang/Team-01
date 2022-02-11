<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/takequiz.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Luckiest+Guy&family=Passion+One:wght@700&family=Rowdies&family=Teko:wght@500&display=swap" rel="stylesheet">
    <title>QuizHub | Answer Quiz</title>
    </head>
        <body>
    <div class = "main">
    <nav>
            <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
            <ul>
                <li><a href="<?php echo site_url('Welcome/Home'); ?>">Home</a></li>
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
            <h1><?=$exam['exam_title']?></h1>
            <form method="POST" action="<?php echo base_url('ExamController/answerquiz/'.$exam['id']);?>">
            <input type="hidden" name="exam_id" value="<?=$exam['exam_id']?>">
            <input type="hidden" name="Title" value="<?=$exam['exam_title']?>">
            <input type="hidden" name="quizcode" value="<?=$exam['exam_code']?>">
            <input type="hidden" name="Total_Question" value="<?=$exam['total_question']?>">
            <input type="hidden" name="Deduction_Points" value="<?=$exam['marks_if_wrong']?>">
            <input type="hidden" name="Correct_Points" value="<?=$exam['marks_if_right']?>">
            <input type="hidden" name="id" value="<?=$exam['id']?>">
            <input type="hidden" name="Total_Points" value="<?=$exam['score']=0?>">
            <input type="hidden" name="username" value="<?=$user['username']?>">
            <input type="hidden" name="user_id" value="<?=$user['id']?>">
            <?php 
            $index = 1;
            for($i=0;$i<count($questions);$i++){ ?>
                <input type="hidden" name="questions[<?=$i?>][question]" value="<?=$questions[$i]['question_id']?>">
                <br><br><label class="title"><?=$index?>.  <?=$questions[$i]['questions']?> </label><br><br><br>
                <ol type="A">
                <?php $opt = 4;
                for($j = 0; $j < count($questions[$i]['options']); $j++) { ?>
                    <input type="radio" id="html" name="questions[<?=$i?>][useranswer]" value="<?=$questions[$i]['options'][$j]['optionid']?>">
                    <label class="radio" for="option"><?=$questions[$i]['options'][$j]['options']?></label><br>
                <?php } ?><br>
                <?php $index++; } ?>
                <div>
            <input type="submit" value="Submit Form">
            </div>
        </div>
            </form>
    </div>
    </body>
</html>