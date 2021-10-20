<?php
$file = fopen('txtfile.txt', "r+");
$file_array = file("txtfile.txt");

$content = get("txtfile.txt");
write($content);

function get($a){
    $content = '';
    $handle = fopen($a, "r+");
    //fopen file txtfile.txt
    while(!feof($handle)){
        $stroka = fgets($handle);
        $content .= $stroka . "<br>";

    }
    fclose($handle);
    return $content;
}

function write($a){

    $arr = explode("<br>", $a);
    $fx = fopen("newfile1.txt", "w"); //create new file with changed info
    foreach ($arr as $key => $num){
        if($key % 2 == 0){
            fwrite($fx, $num);
        }
        else continue;
    }
    fclose($fx);
}





