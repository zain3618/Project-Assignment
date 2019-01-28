<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">


    <title>Register</title>

</head>

<body>

   <?php require "header.php"?>
    <?php require "admin/functions.php"?>

<div class="form-area">

    <div class="image-area">
        <img src="img/chefavatar.png" alt="" class="chef-icon">
    </div>

    <h2>Sign Up</h2>

    <form action="/database/" method="post">

    <p>Enter Your Email:</p>
    <input type="email" class="forminput" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Wrong Email Format!">
    <p>Enter Your Password:</p>
    <input type="text" class="forminput" pattern="^(?=.*\d).{8,100}$" title="Password must be more than 8 digits long and include at least one numeric digit.">

<input type="submit">

    </form>

</div>

</body>
</html>