<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Admin</title>
</head>
<body>
<?php include'top1.php'?>
<br><br><br>
<div class="frm">
	<form action="adc.php" method="post" >
		<h3>Admin</h6><br>
		<input type="text" name="uid" placeholder="User ID"><br>
		<input type="password" name="passd" placeholder="Password"><br>
		<button type="submit">Submit</button>
	</form>
</div>
<br><br><br><br><br><br>

<?php include 'footer.php';?>
</body>
</html>

<style type="text/css">
	body{
		background: linear-gradient(orange,white,green);
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}
	nav{
		text-align: right;
		margin-right: 50px;
	}nav a{
		text-decoration: none;
		font-size: 20px;
		margin-left: 30px;
		color: darkslategrey;
	}.frm form button{
		width: 120px;
		height: 40px;
		background-color: transparent;

		border-style: solid;
		border: 2px solid blue;
		/*background-color: dimgrey;*/
		color: blue;

		font-style: block;
		font-size: large;
		text-decoration: blink	;
		font-display: block;
		font-family: serif;
		letter-spacing: 2px;
	}
</style>