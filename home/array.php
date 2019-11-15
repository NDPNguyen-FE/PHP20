<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table, th, td{
      border   : 1px solid black;
      border-collapse:collapse;
      text-align: center;
    }

  </style>
</head>
<body>



<?php
$products = [
    [
      "name" => "Sam Sung Note 10 PLUS",
      "price" => 1500,
      "currency" => "$"
    ],
    [
      "name" => "Iphone 11 Pro Max ",
      "price" => 2000,
      "currency" => "$"
    ],
    [
        "name" => "Huawei Mate 30  Pro ",
      "price" => 1200,
      "currency" => "$"
    ],
    [
        "name" => "Xiaomi Mi 9 ",
      "price" => 700,
      "currency" => "$"
    ],
    [
        "name" => "Oppo Reno ",
      "price" => 800,
      "currency" => "$"
    ],
    [
        "name" => "Nokia 8.2 ",
      "price" => 800,
      "currency" => "$"
    ]
  ];

  $newproducts = array_merge($products);
  echo "<pre>";
 var_dump($newproducts);
 echo "</pre>";
  
 ?>
<table  width="50%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Currency</th>
    </tr>
  </thead>

  <tbody>
   
      <?php
      for($i = 0;  $i < count($newproducts); $i++ ){?>
        <tr>
          <td><?php echo $newproducts[$i]['name'] ?></td>
          <td><?php echo $newproducts[$i]['price'] ?></td>
          <td><?php echo $newproducts[$i]['currency'] ?></td>
        </tr>
     <?php }
     ?>

  </tbody>
</table>

 
  
</body>
</html>
 