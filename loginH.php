<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<?php include 'top.php'; ?>
<div class="frm">
	<form action="login.php" method="post">
		<img src="./assets/img/p1.jpg" width="60px" style="border-radius: 100px;">
		<h6>User</h6>
		<br>
		<input type="text" name="vid" placeholder="Voter Id"><br><br>
		<input type="text" name="phno" placeholder="Phone Number"><br><br>
		<button type="submit">Login</button>
	</form>
</div>
<?php include 'footer.php'?>
</body>
</html>