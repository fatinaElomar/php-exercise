<?php


$input = "I like Python programming. Python is fun!";
$output = str_replace("Python", "PHP", $input);
$output = str_replace("Python", " PHP", $output);

echo $output;
?>