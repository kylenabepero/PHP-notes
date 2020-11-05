<?php

// simple function
function writeSomething()
{
    echo 'Hello';
}

writeSomething();
//writesomething();

echo '<br>';

// method with parameters

function fruit($fruit)
{
    echo "I like $fruit <br>";
}

fruit("oranges");
fruit("kiwis");
fruit("apples");
fruit(20);

function fruitAndColor($fruit, $color)
{
    echo "I like fruit $fruit and color $color <br>";
}

fruitAndColor("apples", "red");

function fruit2($fruit = "grapefruit")
{
    echo "I like $fruit <br>";
}

fruit2();
fruit2('apples');

// function that returns value

function sum($x, $y)
{
//    return 5;
    
    $z = $x + $y;
    return $z;
}

$int = sum(1,2);

echo $int;