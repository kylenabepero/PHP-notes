<?php

// variable scope 

$y = 10;

function test($x) 
{
//    $x = 10;
//    echo $y;
    
    echo $x;
}

test($y);

//echo $x;
echo '<br>';

$int = 3;

function test2()
{
    global $int;
    echo $int;
}

test2();

// passing by value vs reference

echo '<br>';

$name = "Bob";

function hello(&$someName)
{
    echo "Hello $someName";
    $someName = "Sally";
}

//$name = "Sally";

hello($name);
echo '<br>';
hello($name);

echo "<br> Checking again - $name";
