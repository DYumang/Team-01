<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="main">
<div id="login">
<?php echo @$error; ?>
<h2>Change Password</h2>
<br>
<form method="post" action=''>
		<label>Old Password :</label>
		<input type="password" name="old_pass" id="name" placeholder="Old Pass"/><br /><br />
		<label>New Password :</label>
		<input type="password" name="new_pass" id="password" placeholder="New Password"/><br/><br />

		<label>Confirm Password :</label>
		<input type="password" name="confirm_pass" id="password" placeholder="Confirm Password"/><br/><br />
		<input type="submit" value="login" name="change_pass"/><br />
</form>
</div>
</div>
</body>
</html>