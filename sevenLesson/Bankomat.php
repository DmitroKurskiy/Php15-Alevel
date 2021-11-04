<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Bankomat</title>
</head>
<header>
    <nav class="navbar navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">BANKOMAT            +45667901234343</span>
        </div>
    </nav>
</header>
<body>
<section>
    <div class="container-xxl">
        <div class="row align-items-center">
        <div class="col-7">
     <form method="post">
         <h1>Вас приветствует наш банкомат</h1>
    <h2>Ведите сумму , которую хотите получить</h2>
    <p>*сумма должна состоять из цифр и быть кратной 10 <br></p>
    <label>
        <input type="text" name="name" class="form-control" placeholder="enter amount" aria-label="enter amount">
    </label><br>
    <input type="submit" class="btn btn-primary"  value="Ok"><br>
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

         echo "<strong>   Ваш запрос $value </strong> <br>";
         echo "    500 = $_500  <br>";
         echo "    200 = $_200  <br>";
         echo "    100 = $_100  <br>";
         echo "    50 =  $_50  <br>";
         echo "    20 = $_20  <br>";
         ?>
        </div>
         <div class="col-5">
             <img class="w-100" src="bankomat.jpg" alt="bankomat">
         </div>
     </form>

        </div>
    </div>
</section>
<section>
    <h2 text align="center">Наши партнеры</h2>
</section>
<section>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="privat.png" class="card-img-top" alt="..." >
                <div class="card-body">
                    <a href="https://privatbank.ua/ru">https://privatbank.ua</a>
                    <p class="card-text">Обслуживание частных клиентов, предпринимателей, предприятий малого и среднего бизнеса. Интернет-банк. Филиалы и представительства.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="alfa2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://alfabank.ua">https://alfabank.ua/</a>
                    <p class="card-text">Щоб повірити у себе, достатньо підтримки надійного партнера. Нова філософія Альфа-Банку. ТИ — МОЖЕШ здивувати навіть себе.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="pumb.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://www.pumb.ua/ru/pumbonline">https://www.pumb.ua/ru/pumbonline</a>
                    <p class="card-text">Перший Український Міжнародний Банк (ПУМБ) − великий і надійний приватний банк, який з 1991 року працює на українському фінансовому ринку.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<section>
    <footer id="footer" class="footer"><!--Footer-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2021</p>
                    <p class="pull-right">Курский Дмитрий</p>
                </div>
            </div>
        </div>
    </footer><!--/Footer-->
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>