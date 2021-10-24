<?php

$arr = ['small string','biggest of the string', 'average string'];
function maxstr($a)
{
    $max = [];
    foreach ($a as $key => $item) {
        $max[] .= strlen(trim($item));
        $maxLenght = max($max);
    }
    $maxString = '';
    foreach ($a as $item) {
        if (strlen(trim($item)) != $maxLenght){
            continue;
        }
        else {
            $maxString .= $item . PHP_EOL;
        }
    }
    return $maxString;
}
echo maxstr($arr);



























































































































































































