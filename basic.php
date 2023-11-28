<?php

define('USER', 'Smokie');
$name = "Yoshi";
$age = 30;
$stringOne = 'My email is ';
$stringTwo = '...Something very forgettable!';

// -----STRINGS-----
echo $stringOne . $stringTwo;

echo "Hey my name is $name!";
echo 'Hey my name is $name!';

echo "Hey $name, \"waaa!\"";
echo "Hey $name, 'Waaa!'";

echo $name[0];

echo strlen($name);
echo strtoupper($name);
echo strtolower($name);
echo str_replace('s', 'd', $name);

// -----NUMBER-----
$radius = 25; //int
$pi = 3.14; //float

//  To the power **

echo $pi * $radius ** 2;

//order of operation (BIDMAS)

//increment and decrement operators

// no ovewriting the variable
echo $radius + 1;
echo $radius++;
echo $radius;

//does overwriting the variable
$age = 20;
echo $age += 10;

//number function

echo floor($pi);
echo ceil($pi);
echo pi(); //returns the pi value

//-----ARRAYS-----
//---indexed arrays---
$peopleOne = ['Shaun', 'Crystal', 'Ryu'];

echo $peopleOne[1];
$peopleTwo = array('Ken', 'Chun-Li');

echo $peopleTwo[1];

$ages = [20, 30, 40, 50];

//change value
$ages[1] = 25;

//add additional value
$ages[] = 60;
//array_push($ages, 70);

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);

//print_r($ages);

//check array sizes
//echo count($ages);

//---Associative arrays---

$ninjasOne = ['Shaun' => 'Black', 'Mario' => 'Orange', 'Luigi' => 'Brown'];
//echo $ninjasOne['Mario'];
//print_r($ninjasOne);

$ninjasTwo = array('Bowser' => 'Green', 'Peach' => 'Yellow');

$ninjasTwo['Toad'] = 'Pink';

//print_r($ninjasTwo);

$blogs = [
  ['mario party', 'mario', 'lorem', 30],
  ['mario kart cheats', 'toad', 'lorem', 25],
  ['zelda hidden chests', 'link', 'lorem', 50]
];
//print_r($blogs);
//print_r($blogs[1]);
//print_r($blogs[1][3]);

$blogs2 = [
  ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
  ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
  ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];

//print_r($blogs2);
//print_r($blogs2[1]);
//print_r($blogs2[1]['author']);
//echo count($blogs2);
$blogs2[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
$popped = array_pop($blogs2);
//print_r($blogs2);
//print_r($popped);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Me First PHP File</title>
</head>

<body>

  <h1><?php echo 'Hello, ' . $name . '(' . USER . ')' . ' is ' . $age . ' years old.'; ?></h1>

</body>

</html>