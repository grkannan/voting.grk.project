<?php
    include 'connect.php';
    include 'new.php';
    $a=$_POST['name'];
    $b=$_POST['dob'];
    $c=$_POST['phno'];
    $d=$_POST['add'];
    $e=$_POST['pcode'];
    $f=$_POST['const'];

    voter($con,$a,$b,$c,$d,$e,$f);
?>