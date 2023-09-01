
<div class="set" >
<div class="top">
	<p 
	style="text-align: center;
	font-size: 30px;">
		<a href="index.php" style="color: darkgoldenrod; text-decoration: none;">
			Election Commission Of India
		</a>
	</p>
	<?php 
		if (isset($_REQUEST['m'])) {
			if ($_REQUEST['m']==0 ) {
					// code...
				
				?>
				<style type="text/css">
					body {
						background-image: url("assets/img/mount.jpg");
						background-size: cover;
						background-position: contain;
						background-repeat: no-repeat;
					}
					nav{
						text-align: right;
						margin-right: 50px;
					}nav a{
						text-decoration: none;
						font-size: 20px;
						margin-left: 30px;
						color: yellow;
					}
					
				</style>
					<nav>
						<a href="vregH.php">Register</a>
						<!-- <a href="loginH.php">Login</a> -->
						<a href="adCheck.php">Admins'</a>
					</nav>
					
					<br><br><br><br><br><br>
					<br><br><br><br><br><br>
					<br><br><br><br><br><br>
				<?php
			}
			if (isset($_REQUEST['m'])) {
			if ($_REQUEST['m']==2 ) {//is voted?
				?>
				<script type="text/javascript">alert('Voted');</script>
				<style type="text/css">
					body {
						background-image: url("assets/img/mount.jpg");
						background-size: cover;
						background-position: contain;
						background-repeat: no-repeat;
					}nav{
						text-align: right;
						margin-right: 50px;
					}nav a{
						text-decoration: none;
						font-size: 20px;
						margin-left: 30px;
						color: yellow;
					}
					
				</style>
					<nav>
						<a href="vregH.php">Register</a>
						<!-- <a href="loginH.php">Login</a> -->
						<a href="adCheck.php">Admins'</a>
					</nav><br><br><br><br><br><br>
			<?php
		}
	}
	?>	
</div>

<?php 
	if (isset($_REQUEST['m'])) {
		if ($_REQUEST['m'] == 1) {
			?>
			<style type="text/css">
				body {
					background-image: url("assets/img/img 4.jpg");
					background-size: cover;
					background-position: top;
					background-repeat: no-repeat;
				}
				nav{
					text-align: right;
					margin-right: 50px;
				}nav a{
					text-decoration: none;
					font-size: 20px;
					margin-left: 30px;
					color: red;
				}
				
			</style>
				<div class="nav">
					<nav>
						<a href="resultdisp.php">Result</a>
						<a href="entery.php">Vote</a>
						<a href="selconst.php">Candidates List</a>
					</nav>
				</div>
			<?php
		}
	}
?>
</div>
<?php 
		if (!isset($_REQUEST['m'])) {
			
				?>
				<style type="text/css">
					nav{
						text-align: right;
						margin-right: 50px;
					}nav a{
						text-decoration: none;
						font-size: 20px;
						margin-left: 30px;
						color: yellow;
					}
					
				</style>
					<nav>
						<a href="vregH.php">Register</a>
						<!-- <a href="loginH.php">Login</a> -->
						<a href="adCheck.php">Admins'</a>
					</nav>


				<?php
				
		}
	}?>	