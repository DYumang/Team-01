<html>
    <head>
        <title>QuizHub | Create Quiz</title>
    </head>
        <body>
        <p>
            <?php
            if(isset($msg)){
                echo $msg;
            }
            ?>
        </p>
        <p><?php echo validation_errors(); ?></p>
            <h1>Quiz Form Entry</h1>
            <form method="POST" action="<?php echo base_url()?>ExamController/addExam">
            <input type="hidden" name="exam_id" value="<?=$exam_id?>">
            <?php 
            for($i=1;$i<=$questionArray.count();$i++){ ?>
                <br><br><label>Enter Question <?=$i?></label><br>

                <input type="text" name="questions[<?=$i?>]"  placeholder="Insert Question '<?=$i?>' Here">
                <ol type="A">
                <?php for($j = 1; $j <= $optionArray.count(); $j++) { ?>
                    <li>Option <?=$j?>: <input type="text" name="questions[<?=$i?>][options][<?=$j?>]" placeholder="Option <?=$j?>" id="<?=$i.$j?>"></li>
                <?php } ?>
                </ol><br>
                <label>Assign Answer for Question <?=$i?>: </label><br>
                <select id="isCorrect[<?=$i?>]" name="isCorrect[<?=$i?>]" >
                
                    <option value="" selected>Select Answer</option>
                    <?php for($j = 1; $j <= $optionArray.count(); $j++) { ?>
                        <option value="<?=$j?>"> option <?=$j?></option>
                    <?php } ?>  
                </select>
            <?php } ?>
            <br><br>
            <br><input type="submit" name="submit" value="Submit Form">'
            </form>
        </body>
</html>