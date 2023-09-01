<?php 
	$a = $_POST['uid'];
	$b = $_POST['passd'];
	
	if ($a == "Admin" && $b == "admin") {
		header("Location:adminst.php");
	}else{
		?>
		<script type="text/javascript">
			alert('Incorrect Username or Password');
		</script>
		<?php
	}
?>