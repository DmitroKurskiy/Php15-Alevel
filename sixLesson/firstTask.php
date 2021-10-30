<?php

define ('FIVE', 5);

$count = 0;
$number = '';

for ($i = 1; $i <= 100; $i++) {
    if ($i % FIVE == 0) {
        $count++;
        $number .= $i . "<br>";
    }
}

echo "Число цифр от 1 до 100 которые делятся на 5 составляет $count . <br>";
echo "Вот эти цифры  <br>$number";