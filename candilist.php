<?php
	include 'connect.php';
	include 'top.php';
	include 'agecalculator.php';

	$cs = $_REQUEST['s'];

	$qry = "SELECT * FROM `candi` where `c_nom_constituency` = '$cs'";
	
	$res = mysqli_query($con,$qry);

?>
<title>Candidates List</title>
<table border="1px" cellspacing="5px" cellpadding="10px" style="width: 100%; border-color: goldenrod;">
	<thead style="font-display: block;text-indent: 3px;">
		<tr style="color:whitesmoke;">
			<th>Candidtes Id</th>
			<th>Voter Id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Phone Number</th>
			<th>Address</th>
			<th>Pincode</th>
			<th>Native</th>
			<th>Nominating</th>
			<th>Party Code</th>
			<th>Photo</th>
		</tr>
	</thead>

<?php
//(`id`, `voterId`, `cname`, `dob`, `c_phoneno`, `c_address`, `c_add_pin`, `c_constituency`, `c_nom_constituency`)	
	while ($row = mysqli_fetch_array($res)) {
		?> 
		<tbody>
			<tr >
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['voterId']; ?></td>
				<td><?php echo $row['cname']; ?></td>
				<td><?php echo calculateAge($row['dob']) ; ?></td>
				<td><?php echo $row['c_phoneno']; ?></td>
				<td><?php echo $row['c_address']; ?></td>
				<td><?php echo $row['c_add_pin']; ?></td>
				<td><?php echo $row['c_constituency']; ?></td>
				<td><?php echo $row['c_nom_constituency']; ?></td>
				<td><?php echo $row['partycode']; ?></td>
				<th><img src="assets/img/mp.png" width="50px"></th>
			</tr>
		<?php
	}
?>
		</tbody>
</table>
<table border="1px" cellspacing="5px" cellpadding="10px" style="width: 100%; border-color: goldenrod;text-align: center;">
	<tr >
	<?php 
	$cont = $row['c_nom_constituency'];
		$qry1 = "SELECT * FROM `result`where `constituencyName`='$cs'";
	
		$res1 = mysqli_query($con,$qry1);
		$row1 = mysqli_fetch_array($res1);
	?>	
			<td><?php $conas = strtoupper($row1['constituencyName']); echo "$conas"; ?></td>		
			<td>NOTA</td>
		<th><img src="assets/img/mp.png" width="50px"></th>
	</tr>
</table>
<style type="text/css">
	body {
		/*background-image: url("assets/img/img6.jpg");
		background-size: cover;
		background-position: top;
		background-repeat: no-repeat;*/
		background-color: saddlebrown;
	}
	nav{margin-bottom: 40px;}
	nav a{
		text-decoration: none;
		font-size: 20px;
		margin-left: 30px;

		color: red;
	}
	table thead{
		color: darkolivegreen;
	}
	table tbody{
		color: whitesmoke;
	}
</style>