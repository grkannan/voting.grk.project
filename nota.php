<?php 
function notaAdd($const){
	include 'connect.php';
	$qry = "UPDATE `result` SET `nota`=nota+1 where `constituencyName`='$const'";
	$res = mysqli_query($con,$qry);
}

function notaShow($const){
	include 'connect.php';
	$qry = "SELECT `nota` from `result` where `constituencyName`='$const'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$nota = $row['nota'];
	echo $nota;
}

// $a = "Tirunelveli";
// notaAdd($a);
// notaShow($a);
?>