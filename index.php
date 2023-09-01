<?php
	session_start();
	 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php include 'top.php';?>


<?php 
		if (!isset($_REQUEST['m'])) {
				?>
				<style type="text/css">
					body 
					{
						background-image: url("assets/img/img7.jpg");
						background-size: cover;
						background-position: contain;
						background-repeat: no-repeat;
					}
				</style><br><br>
				<div class="frm">
					<form action="login.php" method="post">
						<img src="./assets/img/p1.jpg" width="60px" style="border-radius: 100px;">
						<h6>User</h6>
						<br>
						<input type="text" name="vid" placeholder="Voter Id"><br><br>
						<input type="text" name="phno" placeholder="Phone Number"><br><br>
						<button type="submit">Login</button>
						<a href="adcheck.php"
style="color:whitesmoke;border: 2px solid ghostwhite; text-decoration: none;padding: 10px; font-size: x-large; letter-spacing: 2px;" 
						>Admin</a>
					</form>
				</div><br><br>
				<?php
		}
	?>
	<?php
	if (isset($_REQUEST['m'])) {
		$m = $_REQUEST['m'];
		
		if ($m== 0) {
			?>
			<div style="text-align: right;margin-right: 200px;">
				<a href="index.php" style="color: white; border:2px solid ghostwhite;padding: 20px;font-size: 60px;text-decoration: none;">
					Login
				</a>
			</div>
			<?php
		}
		 ?>
	<br><br><br><br><br><?php 
	if ($m==2) {
			?>
			<div style="text-align: right;margin-right: 200px;">
				<a href="index.php" style="color: white; border:2px solid ghostwhite;padding: 20px;font-size: 60px;text-decoration: none;">
					GO HOME
				</a>
			</div>
			<?php
		}
	}
	?>
 <?php 
 include 'footer.php'; ?>
</body>
</html>