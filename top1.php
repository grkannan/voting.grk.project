
<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
<?php 
if (!isset($_REQUEST['u'])) {
	?><div class="set">
	<div class="top">
		<style type="text/css">
		body{
			background-image: url("assets/img/img5.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}
		nav{
			text-align: right;
			margin-right: 50px;
			margin-bottom: 100px;
		}nav a{
			text-decoration: none;
			font-size: 20px;
			margin-left: 30px;
			color: yellow;
		}
		</style>
		<p 
		style="text-align: center;
		font-size: 30px;">
			<a href="index.php" style="color: ghostwhite; text-decoration: none;">
				Election Commission Of India
			</a>
		</p>
	</div>
	<div class="nav">
		<nav>
			<a href="resultdisp.php">Result</a>
			<a href="entery.php">Vote</a>
			<a href="selconst.php">Candidates List</a>
		</nav>
	</div>
</div><?php
}
?>

<?php 
if (isset($_REQUEST['u'])) {
	 ?>

	 <div class="set">
	<div class="top">
		<style type="text/css">
		body{
			background-image: url("assets/img/img5.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}
			nav{
				text-align: right;
				margin-right: 50px;
				margin-bottom: 200px;
			}nav a{
				text-decoration: none;
				font-size: 20px;
				margin-left: 30px;
				color: yellow;
			}
		</style>
		<p 
		style="text-align: center;
		font-size: 30px;">
			<a href="index.php" style="color: ghostwhite; text-decoration: none;">
				Election Commission Of India
			</a>
		</p>
	</div>

	<div class="nav">
		<nav>
			<a href="vregH.php">Register</a>
			<!-- <a href="loginH.php">Login</a> -->
			<a href="adCheck.php">Admins'</a>
		</nav>
	</div>
</div>
<?php
}
