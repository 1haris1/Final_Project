<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="CSS/bootstrap.css" >
    <link rel="stylesheet" href="CSS/customcss.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<?php
include "templates/header.php";
include "server/Functions.php";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd1 = $_POST['pwd'];
    $pwd2 = $_POST['psw-repeat'];

    if (!preg_match("/[^0-9][a-zA-Z0-9\s][^0-9]+/",$name)) {
        echo "wrong name";
    }
    if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/",$email)) {
        echo "wrong name";
    }
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$pwd1)) {
        echo "wrong name";
    }
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$pwd2)) {
        echo "wrong name";
    }

}


?>

<div class="regis">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>

        <label><b>Name name</b></label>
        <input   id="regex"
                 pattern="[^0-9][a-zA-Z0-9\s][^0-9]+" type="text" placeholder="Enter name" name="name"  required>
        <label><b>Email</b></label>
        <input id="regex" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password"  id="regex" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Enter Password" name="psw" required>

        <label><b>Repeat Password</b></label>
        <input type="password" id="regex" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" name="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</div>
<?php
include "templates/footer.php";
?>
</body>
</html>
