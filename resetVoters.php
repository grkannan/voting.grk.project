<?php 
// function resetVoter(){
	include 'connect.php';
	$qry = "SELECT * FROM `voter`";
	$res = mysqli_query($con,$qry);
	$count = mysqli_num_rows($res);

	for ($i=0; $i < mysqli_num_rows($res); $i++) { 
		$row = mysqli_fetch_array($res);
		// echo "$row[id] & $row[v_name] <br>";
		$rqry = "UPDATE voter SET status='FALSE' where `id`='$i'";
		$reset = mysqli_query($con,$rqry);
	}
// }
	

	
	// resetVoter();
	header("Location:adminst.php");
	// echo "$count";
?>