<?php

$name = "fatina";
$position = "WebDeveloper";
$github_url = "https://github.com/fatinaElomar";

echo "Hello, I'm " . $name . ", I'm a " . $position . " please check my github link " . $github_url . "<br>";

echo "Hello, I'm {$name}, I'm a {$position} please check my github link {$github_url}<br>";

printf("Hello, I'm %s, I'm a %s please check my github link %s<br>", $name, $position, $github_url);

?>