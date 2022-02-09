<html>
    <head>
        <title>QuizHub | Sample Quiz</title>
    </head>
    <body>
        <?php
        $opt=4;
        ?>
        <form method="POST"action="");?>
            <div class="title"><h1>Sample Title</h1></div>
            <a href="<?php echo site_url('Welcome/Home'); ?>">Home</a><br>
            <h3>1. Sample Question</h3>
            <label>Choose Your Answer:</label>
            <input type="number" name="options" id="options" min="1" max="4"></input>
        </form>
    </body>    
</html>