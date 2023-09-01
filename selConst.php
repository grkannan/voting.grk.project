<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Select</title>
	<style type="text/css">
		form {
			padding: 20px;
			background-color: transparent;
			text-align: justify-all middle;
			border-radius: 20px;
		}
		form input{
			font-size: xx-large;
			margin-bottom: 20px;
		}
		form label {
			font-size: xx-large;
			margin-bottom: 20px;
		}
		form button{
			margin-right: 50px;
			font-size: x-large;
			padding: 20px;
			color: orange;
			border: 2px solid orange;
			background-color: transparent;
		}
	</style>
</head>
<body><?php include 'top1.php';?>
<div align="right">
	<div style="width:30rem;height: 10rem;padding: 20px;">
		<form method="post">
			<label>TIRUNELVELI</label> <input type="radio" name="c" value="TIRUNELVELI"><br>
			<label>PALAYAMKOTTAI</label> <input type="radio" name="c" value="PALAYAMKOTTAI"><br>
			<label>KOVILPATTI</label> <input type="radio" name="c" value="KOVILPATTI"><br>
			<button type="submit" name="submit">Lets Go... </button>
		</form>
	</div>
</div>
	
</body>
</html>
<?php 
	if (isset($_POST['submit'])) {
		$s = $_POST['c'];
		switch ($s) {
			case 'TIRUNELVELI':
				header("Location:candilist.php?s=$s");
				break;
			case 'KOVILPATTI':
				header("Location:candilist.php?s=$s");
				break;
			case 'PALAYAMKOTTAI':
				header("Location:candilist.php?s=$s");
				break;
		}
	}
?>