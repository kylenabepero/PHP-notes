<?php
ini_set('display_errors', 1);

//echo error_reporting();

//error_reporting(0);
//error_reporting(E_ALL);
error_reporting(E_ALL ^ E_NOTICE);

//$_POST

$title = $_POST['title'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$favcolor = $_POST['favcolor'];

echo $title . ' ' .$name . '<br>';

echo $email . '<br>';

echo $message . '<br>';

echo 'Your favorite color is ' . $favcolor;