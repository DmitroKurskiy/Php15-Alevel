<?php


Echo 'write a number from 1 to 5' . "\n";

$handle = fopen("php://stdin", "r");
$a = fgets($handle);


if ($a == 5) {
    echo 'yeah , its maximum';
    die;
}
if ($a % 2 != 0){
    echo 'this is not even number';
}
else echo 'even';
