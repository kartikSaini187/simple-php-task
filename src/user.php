<?php
session_start();
//print_r($_POST);


if(isset($_REQUEST['btnSubmit'])){
    $_SESSION['input1']= $_POST['input1'];
    $_SESSION['input2']=$_POST['input2'];
}
echo  "Hello--  "." ".$_SESSION['input1']." "."<br> <br>";
echo   "Your Password is ".$_SESSION['input2']."<br> <br>";
echo   "<a href='logout.php'><input type=button name='logout' value='logout'></a>"
?>