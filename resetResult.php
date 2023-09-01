<?php 
include 'connect.php';

	$qry = "SELECT * FROM `result`";
	$res = mysqli_query($con,$qry);
	$count = mysqli_num_rows($res);

	for ($i=0; $i < mysqli_num_rows($res)+1; $i++) { 
		$row = mysqli_fetch_array($res);
		// echo "$row[id] & $row[v_name] <br>";
		$rqry = "UPDATE `result` SET `cid`='',`voterId`='',`w_name`='',`w_age`='',`constituency_native`='',`w_votes`='',`tot_voters`='',`no_voted`='',`non_voted`='',`nota`='',`partycode`='' WHERE `id`='$i'";
		$reset = mysqli_query($con,$rqry);
		// echo $i;
	}	
?>
<!-- UPDATE `result` SET `cid`='',`voterId`='',`w_name`='',`w_age`='',`constituency_native`='',`w_votes`='',`tot_voters`='',`no_voted`=''],`non_voted`=''],`nota`=''],`partycode`=''] WHERE `id`='$i' -->