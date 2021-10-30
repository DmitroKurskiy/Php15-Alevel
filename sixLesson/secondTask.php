<?php
$time_start = microtime(true);
define('STO', 100);
$a = 10000;
$x=0;
$sum=0;
for ($i=1;$i<$a;$i++) {

    if (gmp_prob_prime($i) == 2) {
        $sum += $i;
        $x++;


    }
    if ($x == STO){
        break;
    }
}

echo "Количество Простых чисел $x . <br>";
echo "Их сумма = $sum . <br>";
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);

echo "Время работы скрипта составляет $execution_time";