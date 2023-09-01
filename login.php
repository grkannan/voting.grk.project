
<?php 
    include 'connect.php';
    $a=$_POST['phno'];
    $b=$_POST['vid'];

    $res=mysqli_query($con,"SELECT * FROM `voter` WHERE `id`='$b' and `v_phoneno` = '$a' ");

    
    if (mysqli_num_rows($res)>=1) {
        header("Location: index.php?m=1");
    }else {
        header("Location: index.php?m=0");
    }
?>
 