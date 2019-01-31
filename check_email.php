<?php
/**
 * Created by PhpStorm.
 * User: AZ
 * Date: 31/01/2019
 * Time: 1:36 PM
 */


require "server/functions.php";
$e = $_REQUEST["e"];
$sel_email = "select * from login where L_email= '$e'";
$run_email  = mysqli_query($con,$sel_email);
$count = mysqli_num_rows($run_email);
if($count>0)
    echo "Already registered";