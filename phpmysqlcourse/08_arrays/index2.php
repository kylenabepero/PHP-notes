<?php

$assocArray = ["color" => "red", "food" => "meat", "drink" => "lemonade"];

echo "I like to drink " . $assocArray["drink"];
echo '<br>';

echo '<pre>';
print_r($assocArray);
echo '</pre>';

//foreach ($assocArray as $key => $value) {
//    echo 'Key: ' . $key . ' - Value: ' . $value . '<br>';
//}

foreach ($assocArray as $value) {
    echo ' - Value: ' . $value . '<br>';
}

$multiArray = [
    ["apples", "oranges"],
    ["red", "green"]
];

echo '<br>';

echo $multiArray[0][1];
echo '<br>';
echo $multiArray[1][0];

//$string = "one, two, three";
$string = "one two three";

$explode = explode(' ', $string);

echo '<pre>';
print_r($explode);
echo '</pre>';

$implode = implode("-", $explode);
var_dump($implode);