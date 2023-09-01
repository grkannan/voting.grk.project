<?php 
// function resetVotes(){
	include 'connect.php';
	$qry = "SELECT * FROM `candi`";
	$res = mysqli_query($con,$qry);
	$count = mysqli_num_rows($res);

	for ($i=0; $i < mysqli_num_rows($res)+1; $i++) { 
		$row = mysqli_fetch_array($res);
		// echo "$row[id] & $row[v_name] <br>";
		$rqry = "UPDATE `candi` SET `No_votes`=0 where `id`='$i'";
		$reset = mysqli_query($con,$rqry);
		// echo $i;
	}	
// }
// resetVotes();
	header("Location:adminst.php");
?>