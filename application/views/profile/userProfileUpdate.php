<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee+Shade&family=Luckiest+Guy&family=Passion+One:wght@700&family=Rowdies&family=Teko:wght@500&display=swap" rel="stylesheet">
<title>QuizHub | UserProfile Update</title>
</head>
<body>

<div id="main">
<div id="login">
<?php echo @$error; ?>
<h2>Change Password</h2>
<br>
<form method="post" action='<?php echo site_url('Update')?>'>
		<label>Old Password :</label>
		<input type="password" name="old_pass" id="name" placeholder="Old Pass"/><br /><br />
		<label>New Password :</label>
		<input type="password" name="new_pass" id="password" placeholder="New Password"/><br/><br />

		<label>Confirm Password :</label>
		<input type="password" name="confirm_pass" id="password" placeholder="Confirm Password"/><br/><br />
		<input type="submit" value="update" name="change_pass"/><br />
		<a href="<?=base_url('welcome/LogoutController')?>">Logout</a>
</form>
</div>
</div>
</body>
</html>