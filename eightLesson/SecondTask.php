<?php

$handle = fopen("php://stdin", "r");

$bril = 7;

for($i = 1; $i <= $bril; $i+= 2){
$space = $bril - $i;
    echo str_repeat("&nbsp;","$space");
    echo str_repeat("*","$i") . "<br>";
}
for($i = $bril - 2; $i > 0; $i-= 2){
    $space = $bril - $i;
    echo str_repeat("&nbsp;","$space");
    echo str_repeat("*","$i") . "<br>";
}



