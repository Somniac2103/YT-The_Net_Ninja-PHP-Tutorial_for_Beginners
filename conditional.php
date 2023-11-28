<?php
$products = [
  ['name' => 'shiny star', 'price' => 20],
  ['name' => 'green shell', 'price' => 10],
  ['name' => 'red shell', 'price' => 15],
  ['name' => 'gold coin', 'price' => 5],
  ['name' => 'lighting bolt', 'price' => 40],
  ['name' => 'banana skin', 'price' => 2],
];

//while ($i < count($products)) {
//  echo $products[$i]['name'];
//  echo '<br/>';
//  $i++;
//}

//CONDITIONALS

//$price = 5;

//if ($price < 10) {
//  echo 'the condition is met';
//} elseif ($price < 20) {
//  echo 'elseif condition met';
//} else {
//  echo 'the condition is NOT met';
//};

foreach ($products as $product) {
if ($product['price'] < 15 && $product//['price'] > 2) {
  echo $product['name'] . '<br/>';
}
if ($product['price'] < 10 || $product['price'] > 20) {
  echo $product['name'] . '<br/>';
}
}

//breaks exit the current code block
//continue stop the current iteration but starts the next one.
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
    <ul>
      <?php foreach ($products as $product) { ?>
        <?php if ($product['price'] > 15) { ?>
          <li> <?php echo $product['name']; ?></li>
        <?php } ?>
      <?php } ?>
    </ul>
  </div>

</body>

</html>