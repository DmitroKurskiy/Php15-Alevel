<?php
$arr = ['small string','biggest of the string', 'average string',];

$content = maxstr($arr);

function maxstr($a)
{
    $max = [];
    foreach ($a as $key => $item) {
        $max[] .= strlen($item);
        $c = max($max);
    }

    foreach ($a as $item) {
        if (strlen($item) == $c){
            echo $item . "<br>";
        }
    }
}

echo $content;


























































































































































































