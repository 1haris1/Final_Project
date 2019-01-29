<?php
include "server/db_connection.php";

if(isset($_POST["Create_brand"])) {
    $C_brand = $_POST["dre_Btitle"];
    $create = "insert into dress_brands (brands_title) value ('$C_brand');";
    $ref = mysqli_query($con,$create);
    if($ref){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
else if(isset($_POST["Create_cat"])) {
    $C_category = $_POST["dre_Ctitle"];
    $create = "insert into dress_categories (cat_title) value ('$C_category')";
    $ref = mysqli_query($con,$create);
    if($ref){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Dress</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/customcss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<div class="container">
    <h1 class="text-center my-5"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Create New </span> Brand Or Category </h1>
    <form action="Create.php" method="post">
        <div class="row col">
            <div style="margin-top: 3px" class="col ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> Product </span> Brand:</label>
            </div>
            <div class="row col">
                <div class="input-group">
<!--                    <div class="input-group-prepend">-->
<!--                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>-->
<!--                    </div>-->
                    <input id="regex" pattern="[^0-9][a-zA-Z0-9\s][^0-9]+" type="text" class="form-control" id="dre_title" name="dre_Btitle" placeholder="Enter Brand Title" >
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <button type="submit" name="Create_brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Brand </button>
                </div>
            </div>
        </div>
    </form>
    <form action="Create.php" method="post">
        <div class="row col">
            <div style="margin-top: 3px" class="col ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> Product </span> Category:</label>
            </div>
            <div class="row col">
                <div class="input-group">
                    <!--                    <div class="input-group-prepend">-->
                    <!--                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>-->
                    <!--                    </div>-->
                    <input id="regex" pattern="[^0-9][a-zA-Z0-9\s][^0-9]+" type="text" class="form-control" id="dre_title" name="dre_Ctitle" placeholder="Enter Category Title" >
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <button type="submit" name="Create_cat" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Category </button>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
