<?php
$handle = fopen('FizzBuzz.txt', "r");

overwrite($handle);
function overwrite($handle)
{
    $fx = fopen('newFizzBuzz.txt', "w");
    {
            while (!feof($handle)) {
                $content = fgets($handle);
                $arrContent = explode(" ", $content);
                fwrite($fx, fizz($arrContent, $fx) . "\n");
            }
            fclose($fx);
        }
}
function fizz($a,$b)
{
    for ($i = 1; $i <= $a['2']; $i++) {

        if (($i % $a['0'] == 0) && ($i % $a['1'] == 0)) {
            fwrite($b, 'fizzbuzz');
        } elseif ($i % $a['0'] == 0) {
            fwrite($b,  'f');
        } elseif ($i % $a[1] == 0) {
            fwrite($b, 'b');
        } else {
            fwrite($b, $i);
       }
    }
}









































































































































































































