<html>
    <head>
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
        <center><h1>Take A Quiz!</h1></center><hr>
        <center><label>Enter Your Quiz Code:</label></center>
        <center><input type="text" name="exam_code" id="exam_code"></center><br>
        <center><input type="submit" name="submit" value="Submit Form"></center>        
    </body>
</html>