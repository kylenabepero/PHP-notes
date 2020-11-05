<?php

echo '<h2>Increment / decrement</h2>';

$int = 5;

//$int = $int + 1;
//$int += 1;

$int++;

echo $int;

echo '<br>';

$int2 = 88;

echo $int2++;

echo '<br>';

echo $int2;

echo '<br>';

$int3 = 66;

//echo $int3--;
echo --$int3;

echo '<h2>Formatting numbers</h2>';

$f1 = 10.56;

echo round($f1);
echo '<br>';

$f2 = 10.12845;
echo round($f2, 2);
echo '<br>';

echo number_format($f2, 2);

echo '<br>';

$int4 = 123456;

echo round($int4, 2);
echo '<br>';
echo number_format($int4, 2);
echo '<br>';

echo '<h2>Random numbers</h2>';

echo rand();

echo '<br>';

echo rand(0, 10);