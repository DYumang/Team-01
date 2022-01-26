<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Details</title>
</head>
<body>

    <form method="post" action="<?php echo base_url()?>Welcome/addDetails" >
       <h1>Enter Quiz Details</h1></br>
       <label>Quiz Title</label>
       <input type="text" name="exam_title" id="exam_title" /></br>

       <label>Total Questions</label>
       <input type="number" name="total_question" id="total_question" /></br>

       <label>Marks if correct</label>
       <input type="number" name="marks_if_right" id="marks_if_right" /></br>
  
       <label>Marks if wrong</label>
       <input type="number" name="marks_if_wrong" id="marks_if_wrong" /></br>
    
       <label>Exam code</label>
       <input type="text" name="exam_code" id="exam_code">

       <input type="submit" name="submit" value="Submit Form">
    </form>
    
</body>
</html>