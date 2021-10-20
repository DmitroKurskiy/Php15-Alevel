<?php
$file = fopen('txtfile.txt', "r+");
$file_array = file("txtfile.txt");

write($file_array);


function read($a)
{
    while (!feof($a)) {
        $s = fgets($a);
       echo $s . "<br>";
    }
    fclose($a);
}


function average($a)
{
    foreach ($a as $key => $item) {
        $lenght += strlen(trim($item)); // find lenght all string's
    }
    return $average = $lenght / count($a); // find and return average meaning

}

function write($a)
{
    $handle = fopen('bigOfAverage.txt', 'w'); //create new txt file
    foreach ($a as $key => $item) {
        if (strlen(trim($item)) > average($a)) {
            fwrite($handle, $item);
        } else continue;
    }
    fclose($handle);
}

