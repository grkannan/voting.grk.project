<?php
    include 'connect.php';
    function voter($con,$a,$b,$c,$d,$e,$f){
        include 'agecalculator.php';    
       // echo "$age";
       $age = calculateAge($b);
        if ($age>=19) {
            $g = "FALSE";
            $qry = "INSERT INTO `voter` ( `v_name`, `dob`, `v_phoneno`, `v_address`, `v_pincode`, `v_constituency`, `status`) VALUES('$a','$b','$c','$d','$e','$f','$g')";
            if (mysqli_query($con,$qry)) {
                ?><script>alert('Done')</script><?php
                header("Location:index.php?r=$c");
            } 
        }else {
            echo "Not Eligible for voting";
        }

        //$a -> name;
        //$b -> date of birth;
 
        //$c -> phno
        //$d -> address; 
        //$e -> postalcode
        //$f -> constituency
        //$g -> status
    }


    function candidates($con,$a, $b,$h,$j){
        $slt = "Select * from voter where `id` = '$a'";
        $res = mysqli_query($con,$slt);
        $row = mysqli_fetch_array($res);
        $c = $row['dob'];
        $d = $row['v_phoneno'];
        $e = $row['v_address'];
        $f = $row['v_pincode'];
        $g = $row['v_constituency'];
        


        if (mysqli_num_rows($res)) {
            $i=0;
            $qry = "INSERT INTO `candi`
            ( `voterid`, `cname`, `dob`, `c_phoneno`, `c_address`, `c_add_pin`, `c_constituency`, `c_nom_constituency`, `No_Votes`,`partycode`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
        }
        

        //$a voterID                      ===> Getting from form.
        //$b c_name                       ===> Getting from form.
        //$h -> nominated constituency    ===> Getting from form.

        //$c -> dob
        //$d -> phno
        //$e -> address
        //$f -> pin code
        //$g -> present constituency
        
        //$i -> number of votes gained

        //j ->Party code

        if (mysqli_query($con,$qry)) {
            header("Location:cupload.php?u=1");
        }else
            header("Location:cupload.php?u=0");

    }
?>
