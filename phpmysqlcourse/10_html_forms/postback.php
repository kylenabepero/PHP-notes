<?php

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