<?php

$strArr = ['new string of the world', 'best of ever you seen 321', 'how much are ther 88 ** your time'];

function countLetters($a)
{
    $string = $a;
    $count = 0;
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        if (ctype_alpha($string[$i])) {
            $count++;
        }
    }
    return $count;
}

echo countLetters($strArr[0]) . "<br>";
echo countLetters($strArr[1]) . "<br>";
echo countLetters($strArr[2]) . "<br>";
