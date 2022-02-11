<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/quizform.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Luckiest+Guy&family=Passion+One:wght@700&family=Rowdies&family=Teko:wght@500&display=swap" rel="stylesheet">
    <title>QuizHub | Create Quiz</title>
    </head>
        <body>
    <div class = "main">
    <nav>
            <img src="<?php echo base_url('assets/images/logo.png');?>" class="logo">
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
            <h1>Quiz Form Entry</h1>
        </div>
            <form method="POST" action="<?php echo base_url('ExamController/addquestions/'.$exam_id);?>">
            <input type="hidden" name="exam_id" value="<?=$exam_id?>">
            <div class="txt"> 
            <?php 
            
            $opt = 4;
            
            for($i=1;$i<=$total_question;$i++){ ?>
                <br><br>
                    <h3><label>Enter Question <?=$i?></label></h3><br>
                <input type="text" name="questions[<?=$i?>][name]"  placeholder="Insert Question '<?=$i?>' Here">
                <ol type="A"> 
                <?php for($j = 1; $j <= $opt; $j++) { ?>
                    <li><p><input type="text" name="questions[<?=$i?>][options][<?=$j?>]" placeholder="Option <?=$j?>" id="<?=$i.$j?>"> </p></li>
                    <?php } ?>
                </ol><br>
                <h3><label>Assign Answer for Question <?=$i?>: </label></h3><br><br>
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
            </form>
        </div>
    </body>
</html>