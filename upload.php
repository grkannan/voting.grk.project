<?php
    include 'connect.php';
    include 'new.php';
    $a = $_POST['vid'];
    $b = $_POST['name'];
    $h = $_POST['nconst'];
    $j = $_POST['pc'];
    candidates($con,$a,$b,$h,$j);
    
?>