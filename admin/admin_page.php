<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>


<body>
<?php
include "admin_header.php";
?>
<div class="wrapper">
        <div class="sidebar-header">
            <h3 style="font-size: 30px; color: darkgoldenrod; text-align: center"> <b>Admin Panel</b></h3>
        </div>
         <a style="color: forestgreen" href="Create_product.php">
                     <i class="fas fa-plus"></i> Insert New Product
         </a>
         <br>

         <a style="color: yellowgreen" href="#">
                     <i class="fas fa-sitemap"></i> View All Products
         </a>
         <br>

         <a style="color: forestgreen"  href="Create.php">
            <i class="fas fa-plus"></i> Insert New Category
         </a>
         <br>

         <a style="color: yellowgreen"  href="#">
            <i class="fas fa-band-aid"></i> View All Categories
         </a>
         <br>

         <a style="color: forestgreen"  href="Create_brand.php">
            <i class="fas fa-plus"></i> Insert New Brand
         </a>
         <br>

         <a style="color: yellowgreen"  href="#">
            <i class="fas fa-toolbox"></i> View All Brands
         </a>
         <br>


         <a style="color: red"  href="edit_pro.php">
            <i class="fa fa-edit"></i> Update Product
         </a>
         <br>

         <a  style="color: red" href="del_product.php">
            <i class="fa fa-trash-alt"></i> Delete Product
         </a>
         <br>

         <a style="color: blue"  href="#">
            <i class="fa fa-sign-out-alt"></i> Admin logout
         </a>


    <br>
    <br>
    <?php
    include "../templates/footer.php";
    ?>
</div>
</body>
</html>