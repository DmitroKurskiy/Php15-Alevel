<?php
$file = fopen('txtfile.txt', "r+");
$file_array = file("txtfile.txt");

write($file_array);

function write($a) { //txtfile.txt
    $fx = fopen("newfile.txt", "w"); //create file name newfile.txt
    foreach ($a as $key => $num){
        if ($key % 2 == 0) {
            fwrite($fx, $num);         //wright info to the new create file
        }
            else continue;
        }
    fclose($fx);
    }



