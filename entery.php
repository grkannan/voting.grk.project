<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Checking...</title>
    <style type="text/css">
        body{
            background-image: url("assets/img/imgVE.jpg");
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <?php include 'top1.php' ?>
    <div class="frm">
        <form action="check_v.php" method="post">
            <?php 
                if (isset($_REQUEST['e'])) {
                    
                       ?>
                        <br>
                        <b style="color: red;">
                           Rejected
                        </b>
                        <br><br>
                        <?php ;
                }
            ?>
            <input type="number" name="voterId" placeholder="Voter Id" require ><br><br>
            <input type="number" name="phno" placeholder="Phone Number" require><br><br>
            <input type="text" name="const" placeholder="Constituency" require><br><br>
            
            <button type="submit">Let's Go</button>

            <p><b>Notice: </b> This process is about checking manner.</p>
        </form>

    </div>

    <?php include 'footer.php' ?>
</body>
</html>
<style type="text/css">
    .frm form p{
        text-align: end;
        font-variant:small-caps;
        color: lightgrey;
    }
</style>
