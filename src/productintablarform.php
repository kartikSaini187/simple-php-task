<?php
include('productArr.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>IMAGE</th>
            <th>PRICE</th>
</tr>
<?php
  
foreach($products as $key=>$value){
    echo "<tr>";
    echo "<td>".$value['id']."</td>";
    echo "<td>".$value['name']."</td>";
    echo "<td>".$value['image']."</td>";
    echo "<td>".$value['price']."</td>";
  echo "</tr>";
}
?>
    </table>
</body>
</html>