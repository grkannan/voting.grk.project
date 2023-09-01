<?php
    include 'connect.php';
    $id;
    $total=0;
    function voting($id,$con){
        include 'nota.php';
        if ($id != 0) {
            $upd=mysqli_query($con,"UPDATE `candi` SET `No_Votes`=No_Votes+1 WHERE `id`='$id'");
            //$vsel = mysqli_query($con,"");
        }elseif($id == 0) {
            $res1 = mysqli_query($con, "SELECT `c_nom_constituency` FROM candi where `id`='$id'");
            $row1 = mysqli_fetch_assoc($res1);
            notaAdd($const);
        }
    }
    function showVote($id,$con){
        include 'nota.php';
        $res1 = mysqli_query($con, "SELECT votes FROM candi where `id`='$id'");
        $row1 = mysqli_fetch_assoc($res1);
        //Show Vote.
        $vote=$row1['votes'];
        echo "<b>$vote</b>";        
    }
?>