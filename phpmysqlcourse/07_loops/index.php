<?php

echo '<h2>While loop</h2>';

$x = 1;

while ($x <= 5) {
    echo '$x is ' . $x . '<br>';
    $x++;
}

echo '<h2>Do while loop</h2>';

$y = 1;

do {
    echo '$y is ' . $y . '<br>';
    $y++;
} while ($y <= 5);

echo '<h2>For loop</h2>';

for ($z = 0; $z <= 5; $z++) {
    echo '$z is ' .$z.'<br>';
}