<?php 
	function res($const){
		include 'connect.php';
		include 'totvoters.php';
		include 'agecalculator.php';

		$const = $_POST['const'];   //"Tirunelveli"; //separatinng Constituency ;

		$qry = "SELECT MAX(No_Votes) FROM `candi` WHERE `c_nom_constituency`='$const'";
		$res = mysqli_query($con,$qry);
		$row = mysqli_fetch_array($res);

		$mv = $row['MAX(No_Votes)'];

		$max = $mv;

		$qry1 = "SELECT * FROM `candi` WHERE `No_Votes`='$max' and `c_nom_constituency`='$const'	";
		$res1 = mysqli_query($con,$qry1);
		$row1 = mysqli_fetch_array($res1);

		$cid = $row1['id'];			//collecting data from `candi` Table.
		$vid = $row1['voterId'];
		$name = $row1['Cname'];
		$dob = $row1['dob'];		//Just for calculation of age.
		$age = calculateAge($dob);
		$phno = $row1['c_phoneno'];
		$addr = $row1['c_address'];
		$c_add_pin = $row1['c_add_pin'];
		$c_constituency = $row1['c_constituency'];
		$c_nom_constituency = $row1['c_nom_constituency'];
		//$No_Votes = $row1['No_Votes'];

		$tot_voters = findTotVoters($const);
		$no_voted = findVotedVoters($const);
		$non_voted=findNonVoters($const);
		

		$partycode = $row1['partycode'];

		$q = "SELECT COUNT(id) FROM `candi` WHERE `No_Votes`='$max' and `c_nom_constituency`='$const'";
		$r = mysqli_query($con,$q);
		$fetch = mysqli_fetch_array($r);
		$count = $fetch['COUNT(id)'];

		if ($count==1) {
			// code...
			$rQry = "UPDATE `result` SET `cid`='$cid',`voterId`='$vid',`w_name`='$name',`w_age`='$age',`constituency_native`='$c_nom_constituency',`w_votes`='$max',`tot_voters`='$tot_voters',`no_voted`='$no_voted',`non_voted`='$non_voted',`partycode`='$partycode' WHERE `constituencyName`='$c_nom_constituency'";
			if (mysqli_query($con,$rQry)) {
				echo "Done";
				// echo "<br>$const<br>Max : $mv<br>$cid<br>$vid<br>$name<br>$dob<br>$age<br>$phno<br>$addr<br>$c_add_pin<br>$c_constituency<br>$c_nom_constituency";
			}else{
				echo "Not Done";
			}
		}else if($count==0){echo "No Participants";}else{
			$sql = "SELECT * FROM `candi` where `No_Votes` = '$mv' and `c_nom_constituency`='$const'";
			$ex = mysqli_query($con,$sql);?>
				<table border="1px" cellspacing="5px" cellpadding="10px" style="text-align:center;"> 
					<tr style="color:blanchedalmond;">
						<td>Candidate Id</td>
						<td>Name</td>
						<td>Constituency</td>
					</tr>
			<?php 
			while ($rows = mysqli_fetch_array($ex)) {
				
				?>
					<tr style="color:whitesmoke">
						<td><?php echo $rows['id']?></td> 
						<td><?php echo $rows['Cname']?></td>  
						<td><?php echo $rows['c_nom_constituency']?></td>  
					</tr>
				<br>

				<?php 
				
			}echo "</table><p style='color:yellow;'>The above are Equal.</p>";
		}

		
	}//end of res()
	// res();	
?>
<!--
------------------------------------------------------------------------------------------------------------
1)	UPDATE `result` SET `cid`='$cid',`voterId`='$vid',`w_name`='$name',`w_age`='$age',`constituency_native`='$c_nom_constituency',`w_votes`='$No_votes',`tot_voters`='$tot_voters,`no_voted`='$no_voted',`non_voted`='$non_voted',`nota`='$nota',`partycode`='$partycode' WHERE `constituencyName`='$c_constituency'
------------------------------------------------------------------------------------------------------------
$cid = $row['id'];
$vid = $row['voterId'];
$name = $row['Cname'];
$dob = $row['dob'];
$age = calculateAge($dob);
$phno = $row['c_phoneno'];
$addr = $row['c_address'];
$c_add_pin = $row['c_add_pin'];
$c_constituency = $row['c_constituency'];
$c_nom_constituency = $row['c_nom_constituency'];
$No_Votes = $row['No_Votes'];
$partycode = $row['partycode'];
 -->