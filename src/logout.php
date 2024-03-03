<?php
session_start();
if(isset($_SESSION['input1'])){
    session_destroy();
  echo "<script>location.href='loginform.php'</script>";
}
else {
    echo "<script>location.href='loginform.php'</script>";
}
?>