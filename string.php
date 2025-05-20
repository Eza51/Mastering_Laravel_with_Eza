<?php
//mastering laravel with eza

$country = 'I Love My Dog';

$dog = 'my dog color is black';

$name = "    abdullah    rahman     ";

$password = 12345;
echo strlen($country);

echo '<br>';

echo str_word_count($country);
echo '<br>';

echo strpos($country, 'love');

echo '<br>';

echo strrev($country);

echo '<br>';

echo str_replace('dog', 'cat', $country);

echo '<br>';

echo strtolower($country);
echo '<br>';

echo strtoupper($dog);

echo '<br>';

echo ucfirst($dog);
echo '<br>';
echo ucwords($name);

echo '<br>';

echo trim($name);

echo '<br>';

echo md5($password);
