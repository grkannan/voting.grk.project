<?php 
	
	function findTotVoters($const){
		include 'connect.php';
		$Sqry =  "SELECT COUNT(id) FROM `voter` WHERE v_constituency = '$const'";
		$q = mysqli_query($con,$Sqry);
		$row = mysqli_fetch_array($q);
		$count = $row['COUNT(id)'];	
		return $count;
	}
	function findNonVoters($const){
		include 'connect.php';
		$Cqry =  "SELECT COUNT(id) FROM `voter` WHERE v_constituency = '$const' AND `status`='FALSE'";
		$RES = mysqli_query($con,$Cqry);
		$row = mysqli_fetch_array($RES);
		$count = $row['COUNT(id)'];	
		return $count;
	}
	function findVotedVoters($const){
		include 'connect.php';
		$Cqry =  "SELECT COUNT(id) FROM `voter` WHERE v_constituency = '$const' AND `status`='TRUE'";
		$RES = mysqli_query($con,$Cqry);
		$row = mysqli_fetch_array($RES);
		$count = $row['COUNT(id)'];	
		return $count;
	}

	//to be
	function findnota($const){
		include 'connect.php';
		$Cqry =  "";
		$RES = mysqli_query($con,$Cqry);
		$row = mysqli_fetch_array($RES);
		$count = $row['COUNT(id)'];	
		return $count;
	}

	// $a ="Tirunelveli";
	// findNonVoters($a);
	// findTotVoters($a);
	// findVotedVoters($a);
?>