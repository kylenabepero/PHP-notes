<?php
declare(strict_types = 1);
// 1 speed

// 2 type declarations
//function test(SomeClass $someClass, array $array)
//{
//    return "";
//}

//function test(array $array)
//{
//    return "";
//}

//function test(int $a, int $b)
//{
//    return $a + $b;
//}
//
//echo test(1, 2);

// 3 return type declarations

//function test($a, $b) : int
//{
//    return 3.5;
//}
//
//echo test("", "");

// 4 null coalescing operator

//??

//$int = 5;
$int = null;

$test = $int ?? 100;

echo $test;

