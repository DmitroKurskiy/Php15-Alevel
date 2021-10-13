<form method="post">
    <h1>Вас приветствует наш банкомат</h1>
    <h2>Ведите сумму , которую хотите получить</h2>
    <p>*сумма должна состоять из цифр и быть кратной 10 <br></p>
    <label>
        <input type="text" name="name" >
    </label><br>
    <input type="submit" value="go">

</form>


<?php
$value = '';
if(is_numeric($_POST['name']) && ($_POST['name']) % 10 == 0){
    $value = $_POST['name'];
}
else{
   echo 'Введите правильные данные';
   die;
}

$_20 = 0;
$_50 = 0;
$_100 = 0;
$_200 = 0;
$_500 = 0;





$b = intdiv($value, 500);


if($value - ($b * 500) == 10 || $value - ($b * 500) == 30) {
    $b = intdiv($value - 100, 500);
}
else{
    $b = intdiv($value, 500);
}
$_500 = $b;

$c = $value - ($b * 500);
$o = strval($c);
$v = intdiv($c, 200);
if ($o[1] == 1 || $o[1] == 3) {
    $v = intdiv($c - 100, 200);
}


$_200 = $v;

$x = $c - ($v * 200);


if($x > 110 && $x != 130 || $x == 100 ){
    $g = 1;

}
else{
    $g = 0;
}

$_100 = $g;

$k = ($x - ($g * 100));

$m = intdiv($k, 50);
if($k - $m * 50 == 30 || $k - $m * 50 == 10){
    $d = 1;
}
else{
    $d = 0;
}

$_50 = $m - $d;

$i = $k - ($_50 * 50);

$_20 = intdiv($i, 20);



echo "500 = $_500  <br>";
echo "200 = $_200  <br>";
echo "100 = $_100  <br>";
echo "50 =  $_50  <br>";
echo "20 = $_20  <br>";
