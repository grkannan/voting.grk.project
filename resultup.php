<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Publish</title>
	<style type="text/css">
		body{
			background-color: saddlebrown;
		}
	</style>
</head>
<body>
	<?php 
		include 'top1.php';
	?>
	<div class="frm">
		<form method="post">
		<input type="text" name="const" placeholder="Constituency"><br>
		<button type="submit" name="submit">Publish</button>
	</form>
	</div>
	
</body>
</html>
<?php 

	if (isset($_POST['submit'])) {
		include 'upres.php';
		$const = $_POST['const'];
		res($const);
	 }
?>
