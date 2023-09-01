<?php 
    if (isset($_REQUEST['u'])) {
        $u = $_REQUEST['u'];
        if ($u == 1) {
            ?> <script type="text/javascript">alert("Done");</script> <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <title>Candidates Up</title>
</head>
<body>
<?php include 'top1.php'; ?>

    <div class="frm">
        <form action="upload.php" method="post">
            <?php 
                if (isset($_REQUEST['u'])) {
                    $u = $_REQUEST['u'];

                    if ($u == 0) {
                        ?> <h3 style="color:indianred;">Rejected</h3> <?php
                    }
                }
            ?>
            <input type="number" name="vid" placeholder="Voter ID" require><br>
            <input type="text" name="name" placeholder="Full Name" require><br>
            <input type="text" name="pc" placeholder="Party Code" require><br>
            <input type="text" name="nconst" placeholder="Nominated Comstituency" require><br>
            <button type="submit">Upload</button>
        </form>
    </div>
<?php include 'footer.php'?>
    
</body>
</html>
    