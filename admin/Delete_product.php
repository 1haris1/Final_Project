<?php
require "../server/db_connection.php";
if(isset($_GET['del_pro'])){
    $del_id = $_GET['del_pro'];
    $del = "delete from dress_product where dress_Id='$del_id'";
    $run_del = mysqli_query($con,$del);
    if($run_del){
        echo $del;
        header('location: admin_page.php?view_products');
    }
}

