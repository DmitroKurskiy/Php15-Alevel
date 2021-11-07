<?php

$apartment = 13 ;
$number_of_floor = 5;
$number_of_apartment = 4;

function answer($a,$b,$c)
{
    $all = $b * $c;
    if ($a % $all == 0) {
        echo intdiv($a, $all) . " Подьезд  ";

    } elseif ($a % $all != 0) {
        echo intdiv($a, $all) + 1 . " Подьезд  ";

    }
     {
        $entrance = $a % $all;
        if ($a % $all == 0){
            echo '5 Этаж';

        }
        elseif($entrance % $c == 0){
            echo intdiv($entrance,$c) . " Этаж";
        }
        else {
          echo  intdiv($entrance,$c) + 1 . " Этаж";
        }
    }

}

 answer($apartment,$number_of_floor,$number_of_apartment);










