<?php

echo '<h2>Manipulating html tags</h2>';

$html = '<p>some text</p>';

echo htmlspecialchars($html);
echo '<br>';

echo htmlentities($html);
echo '<br>';

echo strip_tags($html);
echo '<br>';

echo '<h2>Encoding and decoding</h2>';

$url = "one two three";

echo '<a href="somepage.php?test=', urlencode($url), '">Link</a>';

echo '<h2>String functions</h2>';

// get a substring
echo substr('hello world', 2);
echo '<br>';
echo substr('hello world', 2, 5);
echo '<br>';

// get length of string
echo strlen('hello');
echo '<br>';

// find and replace
echo str_replace(" ", "-", "hello world with some spaces");
echo '<br>';

// trim
echo 'white space                      ';
echo '<br>';
echo trim('white space                      ');
echo '<br>';

// lowercase
echo strtolower("ALL UPPERCASE");
echo '<br>';

// uppercase 
echo strtoupper("all lowercase");
echo '<br>';

// capitalize first
echo ucfirst("hello world");
echo '<br>';

// capitalize all
echo ucwords("hello world");
echo '<br>';
