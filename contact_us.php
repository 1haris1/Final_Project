<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="CSS/bootstrap.css" >
    <link rel="stylesheet" href="CSS/customcss.css" >

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include "templates/header.php";
?>

<div id="pic"  class="container">
    <div class="row">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: white">Name</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="haris">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: white">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: white">Subject</label>
                <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" style="color: white">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
</div>


<div class="topic">
    <b> Contact </b>
    <div style="font-size: 20px"> Phone no: 0303 - 9115836</div>
    <div style="font-size: 20px"> Email: harissheikh987@gmail.com</div>
</div>

<?php include 'templates/footer.php';?>

</body>
</html>