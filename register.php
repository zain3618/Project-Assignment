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


<header>

    <div class="Top-Row">

        <div id="Strip">

            <div class="Logo">

                <img src="img/Logo.png" />

            </div>
        </div>

            <div class="PageTitle">
                <h1> Register </h1>
            </div>

    </div>

</header>

<div class="Nav">

    <ul>
        <li> <a href="index.php"> Index </a> </li>
        <li>|</li>
        <li> <a href="about.php"> About </a> </li>
        <li>|</li>
        <li> <a href="contact.php"> Contact </a> </li>
        <li>|</li>
        <li> <a href="register.php"> <u>Register</u> </a> </li>
        <li>|</li>
        <li> <a href="login.php"> Login </a> </li>
        <li>|</li>
        <li> <a href="forgotpassword.php"> Forgot password </a> </li>
    </ul>

</div>

<!--<div class="form-area">

    <div class="image-area">
        <img src="img/chefavatar.png" alt="">
    </div>

    <form action="register.php">



       <a>Email:</a> <input type="text" name="Signup-Email"
        pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Wrong Email Format!">

        <a>Password</a> <input type="text" name="Signup-Password"
               pattern="^(?=.*\d).{8,100}$" title="Password must be more than 8 digits long and include at least one numeric digit.">

        <input type="submit">
    </form>



</div>
-->

<!--<div class="form-area">
    <div class="image-area">
        <img src="img/chefavatar.png" alt="">
    </div>

    <form action="register.php">

        <p>Email <input type="text" name="Signup-Email"
                             pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Wrong Email Format!">
        </p>

        <p>Password: <input type="text" name="Signup-Password"
                               pattern="^(?=.*\d).{8,100}$" title="Password must be more than 8 digits long and include at least one numeric digit.">
        </p>

        <input type="submit">
    </form>

    <a href="forgotpassword.php" class="form-pass">Forgot Password?</a>

</div>
-->



<div class="form-area">

    <div class="image-area">
        <img src="img/chefavatar.png" alt="" class="chef-icon">
    </div>

    <h2>Login | Sign Up</h2>

    <form>

    <p>Enter Your Email:</p>
    <input type="email" class="forminput" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Wrong Email Format!">
    <p>Enter Your Password:</p>
    <input type="text" class="forminput" pattern="^(?=.*\d).{8,100}$" title="Password must be more than 8 digits long and include at least one numeric digit.">
<!--
    <a href="register.php" class ='form-btn'>
        <span class="form-btn-text">Sign Up</span>
        <span class="form-btn-text">Log In</span>
    </a>
-->
<input type="submit">

    </form>

    <a href="forgotpassword.php" class="form-pass">Forgot Password?</a>
</div>

</body>
</html>