<?php

// create a file 
touch('colors.txt');

// check if file exists 
if (file_exists('colors.txt')) echo 'File exists! <br>';

// writing to a file 
//$fp = fopen('colors.txt', mode);
//
//fwrite($fp, data);
//
//fclose($fp);

if ($fp = fopen('colors.txt', 'a+'))
{
    flock($fp, LOCK_EX);
    fwrite($fp, "A line" . PHP_EOL);
    flock($fp, LOCK_UN);
    fclose($fp);
} else {
    echo 'Cannot write to file for some reason <br>';
}

// reading from a file 
$data = file('colors.txt');

//echo '<pre>';
//print_r($data);
//echo '</pre>';

foreach ($data as $v)
{
    echo $v . '<br>';
}

// create dir 
if (! file_exists('test')) mkdir('test');

// get files from folder 
touch('test/test1.txt');
touch('test/test2.txt');
touch('test/test3.txt');

$files = glob("test/"."*.txt");
//echo '<pre>';
//print_r($files);
//echo '</pre>';

foreach ($files as $v)
{
    echo basename($v) . '<br>';
}