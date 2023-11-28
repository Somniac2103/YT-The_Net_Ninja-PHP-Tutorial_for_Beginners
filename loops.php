<?php

//-----LOOPS-----

//FOR LOOPS
//for($i = 0; $i < 5; $i++){run code};
//for($i = 0; $i < count($blogs); $i++){run code};

//FOREACH LOOPS

//foreach ($blogs as $blog) {run code};
// $blogs is the array and blog is the single instance used in the loop

$ninjas = ['Shaun', 'Ryu', 'Yoshi'];

//for ($i = 0; $i < count($ninjas); $i++) {
//  echo $ninjas[$i] . '<br/>';
//}

//foreach ($ninjas as $ninja) {
//  echo $ninja . '<br/>';
//};

$products = [
  ['name' => 'skinny star', 'price' => 20],
  ['name' => 'green shell', 'price' => 10],
  ['name' => 'red shell', 'price' => 15],
  ['name' => 'gold coin', 'price' => 5],
  ['name' => 'lighting bolt', 'price' => 40],
  ['name' => 'banana skin', 'price' => 2]
];

//foreach ($products as $product) {
//  echo $product['name'] . ' - ' . $product['price'];
//  echo '<br />';
//};


//WHILE LOOPS
//$i = 0;
//while ($i < count($products)) {
//  echo $products[$i]['name'];
//  echo '<br />';
//  $i++;
//}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tuts</title>
</head>

<body>
  <h1>Products</h1>
  <ul>
    <?php foreach ($products as $product) { ?>
      <h3><?php echo $product['name']; ?></h3>
      <p>$ <?php echo $product['price']; ?></p>

    <?php } ?>
  </ul>

</body>

</html>