<?php
$cookie_name= $_POST['uname'];
$cookie_email =$_POST['uemail'];
$cookie_phone=$_POST['uphone'];
$cookie_address =$_POST['uaddress'];
setcookie($cookie_name,$cookie_email,time()+(86400 * 30), "/");



?>
<html>
    <body>
    <?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Hello!11 " ."  ". $cookie_name . " you are set!<br>";
  echo "your Email is: " ." " .$_COOKIE[$cookie_name]. "<br>";
  echo "your Phonenumber  is: " ." " .$cookie_phone. "<br>";
  echo "your address is: " ." " .$cookie_address. "<br>";

}
?>
    </body>
</html>