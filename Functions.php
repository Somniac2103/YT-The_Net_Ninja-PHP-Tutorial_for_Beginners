<?php
//FUNCTION

function sayHello($name = 'Shaun')
{
  echo "Good Morning $name";
}

//sayHello('Mario');

function formatProduct($product)
{
  //echo "{$product['name']} costs $ {$product['price']} to buy <br />";
  return "{$product['name']} costs $ {$product['price']} to buy <br />";
}

$formatted = formatProduct(['name' => 'Gold star', 'price' => '20']);
echo $formatted;


//VARIABLE SCOPE

//LOCAL SCOPE

//GLOBAL SCOPE

// use term global ahead of variable to get global variable in a function.
// function saybye(&$name) will use the global variable inside the function and will alter it