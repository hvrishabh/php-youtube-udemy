<?php
// cookies are often used to identify the user.
// Cookie is a small file that the server embeds on the user's computer.
// Each time the same computer requests a page with a browser, it will send the cokkie too.
// With PHP, you can boh create and retireve cookie values.


// set cookies Syntax
// setcookie(name, value, expire, path, domain, secure, httponly);
// name parameter is mendatory all other are optional.


$cookie_name = "user-test1";
$cookie_value = "testss test";

setcookie($cookie_name, $cookie_value, time()+(10), "/");
// setcookie("user-test1", "", time() - (60));

?>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.<br>";
} else {
  echo "Cookies are disabled.<br>";
}
?>

<html>
    <body>

        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo " Cookie named ". $cookie_name . " is not set!";

        }else{
            echo "Cookie " . $cookie_name . " is set ! <br>";
            echo "Value is " . $_COOKIE[$cookie_name]. "<br>";
        }
        ?>
    </body>
</html>