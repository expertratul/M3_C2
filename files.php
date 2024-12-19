<?php

//file create!!!

$file = 'example.txt';
$content = 'this a test content example file';

if (file_put_contents($file, $content)) {
    echo 'file successfully created';
} else {
    echo 'failed to create fail';
}
echo ' <br>';

//second file!!!
$file_tow = 'second-file.txt';

$handel = fopen($file_tow, 'w');
if ($handel) {
    fwrite($handel, 'hello i am second file');
    fclose($handel);
    echo 'second created successfully';
} else {
    echo 'failed';
}

echo ' <br>';
//w--> write only mode
//A--> Append mode 

if (file_exists('example.txt')) {
    $content = file_get_contents('example.txt');
    echo $content;
} else {
    echo 'file dose not exists';
}
