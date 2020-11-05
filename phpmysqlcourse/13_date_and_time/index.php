<?php

//date('formatting');

echo date('m d Y');

//date_default_timezone_set('Europe/Belgrade');
date_default_timezone_set('Europe/London');

echo '<br>';
echo date('H s i');

// strtotime 

echo '<br>';
echo strtotime("10 September 2000");
echo '<br>';
echo strtotime("11 September 2000");
echo '<br>';
// 86400

$d1 = strtotime("10 September 2000");
$d2 = strtotime("11 September 2000");
$d3 = $d2 - $d1;
echo $d3;
