<?php
session_start();
if (isset($_SESSION['user'])){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html >
<head >
    <meta charset="UTF-8">
    <title>Authorization</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="check.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .red{
            color: red;
        }
        .green{
            color: #4CAF50;
        }
    </style>
</head>
<body>
<section class="login-form" style="background-image: url('img/back.png');">
    <form id="sff" class="" action="user.php" method="post">
        <div class="box">
            <div class="img" style="margin-left: 143px">
                <img src="img/boy.png" alt="user">
                <img src="img/girl.png" alt="user">
            </div>
            <div class="heading">
                <h4 style="color: #FFA177; margin-left: 142px">Authorization</h4>
            </div>
            <div class="form-fields">
                <div class="input-box">
                    <input id="username" required="required" type="text" name="username" placeholder="username" class="form-control">
                    <span><img src="img/user.png"></span>
                </div>

                <div class="input-box">
                    <input id="password" required="required" type="password" name="password" placeholder="password" class="form-control">
                    <span><img src="img/password.png"></span>
                </div>

                <div class="button-box">
                    <input id="signIN" value="SignIn" type="submit" disabled name="signIN">
                </div>
                <p >
                    Don't have an account?   <a href="register.php">Register Here!</a>
                </p>
                <p id="res"></p>
            </div>
        </div>
    </form>
</section>


</body>
</html>