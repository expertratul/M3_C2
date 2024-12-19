<?php

//string Code!!!!!!!

$name = 'Hello, I am Ratul';

$length = strlen($name);
echo $length;
echo '<br>';

//(V) word count!!!!
echo str_word_count($name);
echo '<br>';

//(V) Reverses!!!!
echo strrev($name);
echo '<br>';

//(V) position chack!!!!!
echo strpos($name, 'Ratul');
echo '<br>';

// Returns a portion!!!
echo substr($name, 0, 5);
echo '<br>';

// string Replaces!!!
$hello = 'hello World';

$replaces = str_replace('hello', 'php', $hello);
echo $replaces;
echo '<br>';

// Converts a string!!!

echo strtoupper($hello);
echo '<br>';

echo strtolower($hello);
echo '<br>';

echo ucfirst($hello);
echo '<br>';

echo ucwords($hello);
echo '<br>';

//!!!!!!!
$fastname = ' ratul  ';
$lastname = '    ppc  ';
$nametrim = trim($fastname, $lastname);
echo $nametrim;

echo '<br>';

//password!!!
$password = '****';
echo md5($password);
echo '<br>';

$password = '09876g6';
echo md5($password);
