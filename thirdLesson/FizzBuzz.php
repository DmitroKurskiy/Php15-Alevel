<?php
$handle = fopen("php://stdin", "r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$num = fgets($handle);

for($i = 1; $i <= $num; $i++) {

if (($i % $fizz == 0) && ($i % $buzz == 0)) {
echo 'fizzbuzz';
}
elseif ($i % $fizz == 0)  {
echo 'f';
}
elseif ($i % $buzz == 0) {
echo 'b';
}
else {
echo $i;
}
}











