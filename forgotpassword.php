<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">



    <title>Forgot Password</title>
</head>

<body>

<?php require "header.php"?>

    <div class="fp-area">
        <div class="fplogo-area">
            <img src="img/Logo.png" alt="">
        </div>
        <h2>Find your Account</h2>
        <h3>Enter your desired email</h3>
        <p>Email</p>

        <form action="register.php">
        <input type="email" class="fpinput" pattern="^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$">
            <input type="submit">
        <!--<a href="register.php" class="fp-next">Next</a>-->
        </form>
    </div>

</body>

<?php require "footer.php"?>

</html>