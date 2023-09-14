<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <ul class="menu-mmber">
        <!-- <li><a href="#">SIGN UP</a></li>
        <li><a href="#" class="header-login-a">LOGIN</a></li> -->
        <?php

if (isset($_SESSION['userid'])) {
    ?>
            <li><a href="#"><?php echo $_SESSION['userid']; ?></a></li>
            <li><a href="includes/logout.inc.php" class="header-login-a"><?php echo $_SESSION['userid']; ?></a></li>
        <?php } else {
    ?>
              <li><a href="#">SIGN UP</a></li>
        <li><a href="#" class="header-login-a">LOGIN</a></li>
        <?php
}
?>

    </ul>
</div>



    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here! </p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit" >SIGN UP</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Do you have an account ? Sing in here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit"  >LOGIN</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>