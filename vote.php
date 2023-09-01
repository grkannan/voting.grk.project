<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
    <style type="text/css">
        body{
            background-image: url("assets/img/mount.jpg");
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
        }table{
            color: white;
        }nav{
        text-align: right;
        margin-right: 50px;
    }nav a{
        text-decoration: none;
        font-size: 20px;
        margin-left: 30px;
        color: red;
    }
        button{
            width: 120px;
            height: 40px;
            margin-top: 30px;
            background-color: transparent;

            border-style: solid;
            border: 2px solid white;
            /*background-color: dimgrey;*/
            color: whitesmoke;

            font-style: block;
            font-size: large;
            text-decoration: blink  ;
            font-display: block;
            font-family: serif;
            letter-spacing: 2px;

        }
    </style>
</head>
<body>
<?php include 'top1.php'; include 'agecalculator.php';?>
    <form method="post">
        <?php
            include 'connect.php';
            $c=$_REQUEST['const'];
            $qry = "SELECT*From `candi` where `c_nom_constituency`='$c'";
            $res = mysqli_query($con,$qry);
            
        ?>
        <!-- Here the value is id of the candidate which is mentioned in the table: Cndidates-->
<div class="table">
    <table border="1px " width="100%">
        <tr>
            <td>Name</td>
            <td>Date of Birth</td>
            <td>Party</td>
            <td>Constituency</td>
            <td>Photo</td>
            <td>Vote</td>
        </tr>
        <?php
        
         while ($row = mysqli_fetch_array($res)) {
        ?>
        <tr>
            <td><?php echo $row['cname']?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['partycode']?></td>
            <td><?php echo $row['c_nom_constituency']?></td>
            <td><img src="assets/img/mp.png" width="60px"></td>
            <td><input type="radio" value="<?php echo $row['id']?>" name="num"><?php echo $row['id']?> </td>
        </tr><?php
        }
    ?>
    </table>
        <button type="submit" name="submit">Vote</button>
    
    </div>
    
    </form>
<?php 
// include 'footer.php';?>    
</body>
</html>
<?php 
    if (isset($_POST['submit'])) {
        $a = $_POST['num'];
        include 'votting.php';
        // echo $a;
        voting($a,$con);
        header("Location:index.php?m=2");
    }
?>
