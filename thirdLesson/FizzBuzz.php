<?php

echo 'Privet champion , vedi chislo' . "\n";

$handle = fopen("php://stdin", "r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$num = fgets($handle);

for($i = 1; $i <= $num; $i++) {
    if (($i % $fizz == 0) && ($i % $buzz == 0)) {
        echo 'fizzbuzz';
    }

    if (($i % $fizz == 0) && ($i % $buzz != 0)) {
        echo 'f';
    }
    if (($i % $buzz == 0) && ($i % $fizz != 0)) {
        echo 'b';
    }
    if (($i % $fizz != 0) && ($i % $buzz != 0)) {
        echo $i;
    }
}











