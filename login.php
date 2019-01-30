<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/customcss.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<?php
include "templates/header.php";


if(isset($_POST['submit'])) {

    $email = $_POST['email'];

    if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $cattest)) {
        echo "wrong name";
    }
}
?>

<section id="mid">
    <div id="Main-content" class=" container text-center">
        <h1>LOGIN</h1>
        <form>
            <div class="user row ">
                <div class="form-group offset-lg-5 offset-md-4 offset-sm-4 offset-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input id="regex" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" type="email"  class="form-control" name="email" placeholder="email">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group offset-lg-5 offset-md-4 offset-sm-4 offset-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input id="regex" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" style="margin: 0" type="password" class="form-control"  placeholder="Password">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form><br>
        <div id="for">
            <a href="forget_pw.php">Forget Password?</a>
        </div>
    </div>
</section>
<?php
include "templates/footer.php";
?>
</body>
</html>