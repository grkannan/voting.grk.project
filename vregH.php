<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Register</title>
</head>
<body>
<?php include 'top.php';?>
<style type="text/css">
    body 
    {
        background-image: url("assets/img/imgV.jpg");
        background-size: cover;
        background-position: contain;
        background-repeat: no-repeat;
    }
    nav a{
        text-decoration: none;
        font-size: 20px;
        margin-left: 30px;
        color: grey;
    }
    .frm form button{
        width: 120px;
        height: 40px;
        background-color: transparent;

        border-style: solid;
        border: 2px solid black;
        /*background-color: dimgrey;*/
        color: black;

        font-style: block;
        font-size: large;
        text-decoration: blink  ;
        font-display: block;
        font-family: serif;
        letter-spacing: 2px;

    }
</style>
<div class="frm">
    <form action="reg.php" method="post">
        <input type="text" name="name" placeholder="Full Name" size="50"><br><br>
        <input type="date" name="dob"><br><br>
        <input type="text" name="phno" placeholder="Phone No" size="60"><br><br>        
        <input type="text" name="add" placeholder="Address" size="60"><br><br>
        <input type="text" name="const" placeholder="Constituency" size="50"><br><br>
        <input type="number" name="pcode" placeholder="Postal Code." size="40"><br><br>
        
        <button type="submit" >Register</button>
    </form>
</div>
<?php include 'footer.php'?>
</body>
</html>