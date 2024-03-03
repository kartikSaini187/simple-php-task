
<?php
session_start();
 $array1 = array(1,2,3,4,5);
 echo "old array:- ";
 foreach($array1 as $val){
     
     echo $val." ";
 }
;
 
$newArray= $_SESSION['arrI'];
 echo "new array:- ";
foreach($newArray as $val){
    echo $val." ";
}










