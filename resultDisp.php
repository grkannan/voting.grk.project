
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-color: royalblue;
		}
		/* table{
			
		} */
	</style>
	<title>
		Result view
	</title>
</head>
<body>
	<?php include 'top1.php';?>
<div style="font-family: sans-serif;">
	<table border="0px" cellspacing="5px" cellpadding="10px"  style="border-radius:10px;">
		<thead style="font-display: block;text-indent: 3px;background-color: orange;color: grey;">
			<tr>
				<th>
					<b>#</b>
				</th>
				<th>
					Candidate Id
				</th>
				<th>
					Voter Id
				</th>
				<th>
					Name
				</th>
				<th>
					Age
				</th>
				<th>
					Constituency
				</th>
				<th>
					Constituency Native
				</th>
				<th>
					Votes Gained
				</th>
				<th>
					Total Voters
				</th>
				<th>
					No. of Voted Voter
				</th>
				<th>
					No. of Not Voted Voter
				</th>
				<th>
					NOTA
				</th>
				<th>
					Party Code
				</th>
			</tr>
		</thead>
<?php 
	include 'connect.php';

	$qry = "SELECT * FROM `result` ORDER BY `constituencyName` ";
	$res = mysqli_query($con,$qry);
	$i = 1;
	while ($row = mysqli_fetch_array($res)) {
		

		?>
		<tbody style="font-display: block;text-indent: 3px;background-color: whitesmoke;color: green;">
			<tr>
				<th>
					<?php echo $i?>
				</th>
				<th>
					<?php echo $row['cid'];?>
				</th>
				<th>
					<?php echo $row['voterId'];?>
				</th>
				<th>
					<?php echo $row['w_name'];?>
				</th>
				<th>
					<?php echo $row['w_age'];?>
				</th>
				<th>
					<?php echo $row['constituencyName'];?>
				</th>
				<th>
					<?php echo $row['constituency_native'];?>
				</th>
				<th>
					<?php echo $row['w_votes'];?>
				</th>
				<th>
					<?php echo $row['tot_voters'];?>
				</th>
				<th>
					<?php echo $row['no_voted'];?>
				</th>
				<th>
					<?php echo $row['non_voted'];?>
				</th>
				<th>
					<?php echo $row['nota'];?>
				</th>
				<th>
					<?php echo $row['partycode'];?>
				</th>
			</tr>
		</tbody>
		<?php $i+=1;
	 }
	


?>
	</table>
</div>
	
</body>
</html>