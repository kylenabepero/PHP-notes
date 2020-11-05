<?php

//$fruits = array("grapefruit", "apples", "bananas");

$fruits = ["grapefruit", "apples", "bananas"];

// access an array element
echo $fruits[2];
echo '<br>';

// add an element
$fruits[] = "kiwi";
$fruits[3] = "oranges";

// show array content
echo '<pre>';
print_r($fruits);
echo '</pre>';

// delete an element
unset($fruits[3]);

// show array content
echo '<pre>';
print_r($fruits);
echo '</pre>';

// loop with for loop
$fruitCount = count($fruits);

//echo $fruitCount;

for ($i = 0; $i < $fruitCount; $i++) {
    echo $fruits[$i] . '<br>';
}