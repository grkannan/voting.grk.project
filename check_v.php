<?php 
include 'connect.php';

$vid = $_POST['voterId'];
$phno = $_POST['phno'];
$const = $_POST['const'];

function check($con,$vid,$const,$phno){

	$select = "SELECT * FROM `voter` WHERE `id` = '$vid' AND `v_constituency` = '$const'";

	$res = mysqli_query($con,$select);

	$row = mysqli_fetch_array($res);
	
	$cons = strtoupper($const);
	
	$a = $row['id'];
	
	$b = $row['v_constituency'];

	$c_const = strtoupper($b);
	
	$stat = "FALSE";
	
	$S = $row['status'];

	$ph = $row['v_phoneno'];
	
	if ($vid == $a && $stat == $S && $phno == $ph) {
		header("Location:vote.php?const=$b");
	}
	else 
		header ("Location: index.php?m=0");
		// echo "$a , $S , $ph <br>" ;
		// echo "$vid , $const , $phno";
	
}

check($con,$vid,$const,$phno);

?>