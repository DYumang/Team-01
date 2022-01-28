<html>
    <head>
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
            <?php
                $this->db->select('total_question');
                $query=$this->db->get('exam_details_table');
                $total=['total_question']; 
                for($i=1;$i<=$query;$i++){
                    echo '<form method="post" action="">
                        <label>Enter Question'.' '.$i.'</label><br>
                        <input type="text" name="question_title" id="question_id" placeholder="Insert Question Here">
                        <ol type="A">
                        <li>Option 1: <input type="text" name="option_title" placeholder="Option 1" id="option_id"></li>
                        <li>Option 2: <input type="text" name="option_title" placeholder="Option 2" id="option_id"></li>
                        <li>Option 3: <input type="text" name="option_title" placeholder="Option 3" id="option_id"></li>
                        <li>Option 4: <input type="text" name="option_title" placeholder="Option 4" id="option_id"></li>
                    </ol><br>
                    <label>Assign Answer: </label>
                    <input type="number" name="answer_option" placeholder="1" min="1" max="4">    
                </form><br>';
                }
            ?>
            <br><input type="submit" name="submit" value="Submit Form">
        </body>
    </head>
</html>