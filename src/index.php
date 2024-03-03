<?php
// task 1
$ceu1 = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
 

echo  "The captal of Netherlands is ". $ceu1['Netherlands']."<br>"; 
echo  "The captal of Greece is ". $ceu1['Greece']."<br>";
echo  "The captal of Germany is ". $ceu1['Germany']."<br>";
echo "<br>";
?>

<?php
//task 2
$x = array(1, 2, 3, 4, 5);
 echo var_dump($x)."<br>";
 unset($x[3]);
 $x = array_values($x);
 echo var_dump($x);
 echo "<br>";
 ?>

 <?php
 //task 3
 $color = array(4 => 'white', 6 => 'green', 11=> 'red');
  echo reset($color);
  echo "<br>";

 ?>
 <?php
  //task 4
  $arr = array(1,2,3,4,5);
  foreach($arr as $newarr){
      echo $newarr." ";
     
  }
  echo "<br>";
  $val= "$";
  $pos= 3;
 $newarr=array_merge(array_slice($arr, 0, $pos), array($val), array_slice($arr, $pos)); 
 
 foreach($newarr as $newarray){
     echo $newarray." ";
     
     
 }
 echo "<br>";
 ?>
<?php 
//task 5
$temp =array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

 $arrLength = count($temp);
 $newTemp=0;
 foreach($temp as $i){
     $newTemp += $i;

 }
 echo "<br>";

 echo   "Average Temprature is ".$newTemp/$arrLength;
 echo "<br>";

 sort($temp);
 echo "List of Seven Lowest Temprature is : ";
 for ($i=0;$i<7;$i++){
     echo $temp[$i]." ";
 }
 echo "<br>";
 echo "List of Seven Highest Temprature is : ";
 for($i=($arrLength-7);$i<$arrLength;$i++){
     echo  $temp[$i]." ";
 }
 echo "<br>";
 echo "<br>";
?>
<?php

//task6
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
 


 function meregearray($arr1,$arr2){
     $temp = array();
     
     $temp []=$arr1;
     if(is_scalar($arr2)){
         $temp[]=$arr2;
     }
     else{
      foreach($arr2 as $key => $value){
          $temp[]= $value;

              }
     }

  return $temp;
 }
echo '<pre>';
print_r(array_map('meregearray',$array2,$array1));


echo "<br>";
echo "<br>";

?>


<?php 
//task7

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
 
function uppercase($input1){
$input1 = array_flip($input1);
$input1 = array_change_key_case($input1, CASE_UPPER);
$input1 = array_flip($input1);

return $input1;
}



function lowercase($input2){
$input2 = array_flip($input2);
$input2 = array_change_key_case($input2, CASE_LOWER);
$input2 = array_flip($input2);
return  $input2;
     
}


echo "Values in LowerCase .";
print_r(lowercase($Color)); 

echo "<br>";

echo "Values in UpperCase .";
print_r(uppercase($Color)); 
echo "<br>";
echo "<br>";
?>


 <?php
//task 8 

 $array1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
 $array2 = array('c2','c4');
 print_r ($array1);
 print_r ($array2);
 function filter($arr1,$arr2){
        $newArr2 = array_flip($arr2);
            $filt = array_diff_key($arr1,$newArr2);
            return  $filt;
    
     
  
 }
print_r(filter($array1,$array2));

 
 ?>
 <?php
 include('countryarr.php');
 echo "<table border='1' style='border-collapse:collapse;  border-color: silver; '>";  
 echo "<tr>"."<th>"."Country"."</th>"."<th>". "Capital"."</th>";
foreach($ceu as $key => $value){

 
 echo "<tr>";
 echo "<td>".$key ."</td>" . "<td>". $value . "</td>"  ;
 echo "</tr>";


}
  echo "</table";
  echo "<br>";
  echo "<br>";
 ?>

<?php
session_start();
 
$_SESSION['arrI'] = array();
 
print_r($_SESSION['arr']);
 
foreach($_SESSION['arr'] as $ele )
{
      if($ele == 2)
      {
          $ele = 6;
      }
    array_push($_SESSION['arrI'],$ele);
}
print_r($_SESSION['arrI']);
 
 
 
?>

