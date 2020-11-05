<?php

echo '<h2>if</h2>';

//if (condition) {
//    code to be executed
//}
//
//if (condition) some code;

$int = 10;
//$int = 0;

//if ($int)
//{
//    echo 'true';
//}
//
//if (! $int)
//{
//    echo 'false';
//}

//if ($int > 5)
//{
//    echo '$int is > 5';
//}

echo '<h2>if ... else</h2>';

$int = 5;

if ($int > 5)
{
    echo '$int is > 5';
}
else
{
    echo '$int is not > 5';
}

echo '<h2>If ... elseif ... else</h2>';

$int2 = 1;

if ($int2 > 10)
{
    echo '$int2 > 10';
}
elseif ($int2 < 10)
{
    echo '$int2 is < 10';
}
else
{
    echo '$int2 == 10';
}

echo '<h2>Ternary operator</h2>';

$x = 2;
$x == 1 ? print '$x is 1' : print '$x is not 1';

echo '<h2>Switch</h2>';

$number = 122;

switch ($number)
{
    case 2:
        echo '$number is 2';
        break;
    case 3:
        echo '$number is 3';
        break;
    case 12:
        echo '$number is 12';
        break;
    case 5:
        echo '$number is 5';
        break;
    default:
        echo 'unknown $number value';
}

$int3 = 15;
?>

<h2>Alternative syntax</h2>

<?php if ($int3 == 5): ?>

<p>$int3 is 5</p>

<?php endif; ?>

<br>

<?php

if ($int3 == 5):
    echo '$int3 is 5';
elseif ($int3 == 6):
    echo '$int3 is 6';
else:
    echo '$int3 is not 5 or 6';
endif;

?>