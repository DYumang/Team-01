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
            <form method="POST">
            <input type="hidden" name="exam_id" value="<?=$exam_id?>">
            <?php 
            $opt = 4;
            for($i=1;$i<=$total_question;$i++){ ?>
                <br><br><label>Enter Question <?=$i?></label><br>

                <input type="text" name="questions[<?=$i?>]"  placeholder="Insert Question '<?=$i?>' Here">
                <ol type="A">
                <?php for($j = 1; $j <= $opt; $j++) { ?>
                    <li>Option <?=$j?>: <input type="text" name="questions[<?=$i?>][options][<?=$j?>]" placeholder="Option <?=$j?>" id="<?=$i.$j?>"></li>
                <?php } ?>
                </ol><br>
                <label>Assign Answer for Question <?=$i?>: </label><br>
                <select id="answer[<?=$i?>]" name="answer[<?=$i?>]" >
                
                    <option value="" selected>Select Answer</option>
                    <?php for($j = 1; $j <= $opt; $j++) { ?>
                        <option value="<?=$j?>"> option <?=$j?></option>
                    <?php } ?>  
                </select>
            <?php } ?>
            <br><br>
            <br><input type="submit" name="submit" value="Submit Form">'
            </form>
        </body>
</html>