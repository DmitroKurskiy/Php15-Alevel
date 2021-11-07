<?php

$list = fopen('7.txt',"r");



while(!feof($list)){
     $stroka = fgets($list);
     list($do, $posle) = explode(';',$stroka);
     $arr_posle = explode(' ', $posle);
     if (intdiv(array_sum(explode(' ',$do)),count(explode(' ',$do))) == $arr_posle[0] && (array_sum(explode(' ',$do)) % count(explode(' ',$do))) == $arr_posle[1]){
       echo "$stroka - true . \n";
   }
   else echo "$stroka - false . \n";

}














