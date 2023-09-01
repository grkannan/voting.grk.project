<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrator</title>
</head>
<body >
	<?php include 'top.php';?>

	<table border="0px" width="100%">
		<tr align="center">
			<td align="center">
				<div class="adps1">
					<a href="cupload.php">
						<span style="color:red;">
							<h4>Upload Candidates</h4>
						</span>
					</a>
				</div>
			</td>
			<td align="center">
				<div class="adps2">
					<a href="resultup.php">
						<span>
							<h4>Announcing Result</h4>
						</span><!-- showres.php -->
					</a>
				</div>
			</td>
		</tr>
		<tr align="center">
			<td align="center">
				<div class="adps2">
					<a href="resetVoters.php">
						<span>
							<h4 style="color:red;">Reset Voters</h4>
						</span><!-- showres.php -->
					</a>
				</div>
			</td>
			<td align="center">
				<div class="adps2">
					<a href="resetVotes.php">
						<span>
							<h4 style="color:red;">Reset Votes</h4>
						</span><!-- showres.php -->
					</a>
				</div>
			</td>
		</tr>
		<tr align="center">
			<td align="center">
				<div class="adps2">
					<a href="resetResult.php">
						<span>
							<h4 style="color:red;">Reset Result</h4>
						</span><!-- showres.php -->
					</a>
				</div>
			</td>
		</tr>
	</table>
	<?php include 'footer.php' ?>
</body>
</html>
<style type="text/css">
nav{margin-bottom: 40px;}
	nav a{
		text-decoration: none;
		font-size: 20px;
		margin-left: 30px;

		color: red;
	}
	.adps1{
		/*padding: 3pc;*/
		border-radius: 50px;
		height: 300px;
		width: 30rem;
		background-image: url("assets/img/fp.png");
		text-align: center;
	}
	.adps1 span h4{
		font-size: xx-large;
	}
	.adps2 span h4{
		font-size: xx-large;
	}
	a{
		/*color: wheat;*/
		text-decoration:none;
	}
	.adps2{
		/*padding: 3pc;*/border-radius: 50px;
		height: 300px;
		width: 30rem;
		background-image: url("assets/img/mount.jpg");
		text-align: center;
	}
</style>
