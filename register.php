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
?>

<div class="regis">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>

        <label><b>First name</b></label>
        <input class="bg-dark" type="text" placeholder="Enter First name" name="firstname" required>

        <label><b>Email</b></label>
        <input class="bg-dark" type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password"  class="bg-dark" placeholder="Enter Password" name="psw" required>

        <label><b>Repeat Password</b></label>
        <input type="password" class="bg-dark" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</div>
<?php
include "templates/footer.php";
?>
</body>
</html>
