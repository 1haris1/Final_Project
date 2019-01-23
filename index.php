<?php
 require "server/Functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfect Dressing</title>
    <link rel="stylesheet" href="CSS/bootstrap.css" >
    <link rel="stylesheet" href="CSS/customcss.css" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<?php
include "templates/header.php";
?>

<div class="jumbotron">
    <h1>Buy Latest Stuff Onlline</h1>
    <p>One Place Where you can get best cloths.</p>
</div>


<div class="container-fluid">
    <div class="row">
        <?php read_data(); ?>
    </div>
</div>
</body>

<br>
<!-- Footer -->
<?php
include "templates/footer.php";
?>
<!-- Footer -->

</html>