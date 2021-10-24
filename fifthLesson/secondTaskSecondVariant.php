<?php

$strArr = ['new string of the world', 'best of ever you seen 321', 'how much are ther 88 ** your time'];


function onlyletters($a){
    $result = preg_replace("/[^a-zA-Z]+/", "", $a);
    $countLetters = strlen(trim($result));
    return $countLetters;
}

echo onlyletters($strArr[0]) . "<br>";
echo onlyletters($strArr[1]) . "<br>";
echo onlyletters($strArr[2]);