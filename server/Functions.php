<?php
require_once "db_connection.php";

function read_data(){
    global $con;
    $data = "select * from dress_product order by RAND()";
    $result = mysqli_query($con,$data);
    $count_data= mysqli_num_rows($result);
    if($count_data == 0){
        echo "<h4>There is no data to read.</h4>";
    }
    else if($row = mysqli_fetch_assoc($result)){
        $title = $row['dress_title'];
        $price = $row['dress_price'];
        $img = $row['dress_image'];

        echo "<div class='col-sm-6 col-md-4 col-lg-3 text-center'>
                    <h5 class='text-capitalize'>$title</h5>
                    <img src='admin/Images/$img'>
                    <p> <b> Rs $price/-  </b> </p>
                    <a href='#' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                    <button class='btn btn-primary btn-sm'>
                       <i class='fas fa-cart-plus'></i> Add to Cart
                    </button>
                    </a>
                </div>";
    }
}
function login($E,$P){
    global $con;
    $email = $E;
    $pass = $P;
    $check = mysqli_query($con,"select * from login");
    $result = mysqli_fetch_assoc($check);
    $counter = mysqli_num_rows($check);
    for($i=0;$i<$counter;$i++){
        if($email == $result['user_Id'] || $pass == $result['password']) {
            echo "Invalid Email or Password.";
            break;
        }
        else{
            $que="insert into login (user_id,password) VALUE ('$email','$pass')";
            $conn = mysqli_query($con,$que);
            if($conn){
                header("location: ".$_SERVER['PHP_SELF']);
            }
            break;
        }
    }
}
?>