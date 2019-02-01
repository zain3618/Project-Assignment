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

<?php
session_start();
include ('server\db_connection.php');
$error_msg = '';

if(isset($_POST['login'])){
    $email = $_POST["user_email"];
    $pass = $_POST["user_password"];
    $sel_user = "select * from users where user_email='$email' AND user_password='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);

    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
       echo $error_msg;
    }
    else{
        $_SESSION['user_email'] = $email;

            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_password', $pass, time() + (10 * 365 * 24 * 60 * 60));

        }
        header('location:index.php?logged_in=You have successfully logged in!');

}
?>

<div class="form-area">

    <div class="image-area">
        <img src="img/chefavatar.png" alt="" class="chef-icon">
    </div>

    <h2>Login</h2>

    <form>

        <p>Enter Your Email:</p>
        <input type="email" name="user_email" class="forminput" pattern="^[^_\.\?!@#$%\&*()\^]+\w+[\w-\.]*\@\w+\.*((-\w+)|(\w*))\.[a-z]{2,3}$" title="Wrong Email Format!">
        <p>Enter Your Password:</p>
        <input type="text" name="user_password" class="forminput" pattern="^(?=.*\d).{8,100}$" title="Password must be more than 8 digits long and include at least one numeric digit.">
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
<?php require "footer.php"?>

</html>