<?php



function dd ($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

/*
#1 найти сумму строки
//for
$number = "1547";
function summa ($str){
    $strlen = strlen($str);
    $a = 0;
    for($i = 0; $i < $strlen; $i++){
        $a += $str[$i];
    }
    echo $a;
}

summa($number);


//while
$number = "1547";
function summa2 ($str){
    $strlen = strlen($str);
    $a = 0;
    $i = 0;
    while($i < $strlen){
        $a += $str[$i];
        $i++;
    }
    echo $a;
}
    summa2($number);
*/




/*
# 2Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном
# вами числе. Например: цифра 5 в числе 45645234645764 встречается 4 раза
//for
$num = "45645234645764";

function needle ($int, $number){
    $strlen = strlen($int);
    $a = [];
    for($i = 0; $i < $strlen; $i++){
        if($int[$i] == $number){
            $a [] = $number;
        }
    }
    $count = count ($a);
    echo $count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 >= 20 || $count % 100 < 10)?
        "Цифра $number в числе $int повторяется $count раза" :
        ($count % 10 == 1 && $count % 100 != 11?
            "Цифра $number в числе $int повторяется $count раз" :
            "Цифра $number в числе $int повторяется $count раз");
    //echo "Число $number повторяется $count раза в числе => $int";
}
needle($num, 5);

echo "<br>";

//while
$num = "45645234645764";

function needle2 ($int, $number)
{
    $strlen = strlen($int);
    $a = [];
    $i = 0;
    while($i < $strlen){
        if($int[$i] == $number){
            $a [] = $number;
        }
        $i++;
    }
    $count = count ($a);
    echo $count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 >= 20 || $count % 100 < 10)?
        "Цифра $number в числе $int повторяется $count раза" :
        ($count % 10 == 1 && $count % 100 != 11?
            "Цифра $number в числе $int повторяется $count раз" :
            "Цифра $number в числе $int повторяется $count раз");

}
needle2($num, 5);

*/

/*
# 3 дан массив  (12, 34, 44, 45, 50, 121, 100, 3657, 98, 90). Определить какие делятся на 5 и на 3
//for
$mass = [12, 34, 44, 45, 50, 121, 100, 3657, 98, 90];

function d ($array){
    $count = count($array);
    echo "Числа которые делятся на 5 и на 3:";
    for($i = 0; $i < $count; $i++){
        if($array[$i] % 5 == 0 && $array[$i] % 3 == 0){
            dd($array[$i]);
        }
    }

}
d($mass);


//while
$mass = [12, 34, 44, 45, 50, 121, 100, 3657, 98, 90];

function d2 ($array)
{
    $count = count($array);
    echo "Числа которые делятся на 5 и на 3:";
    $i = 0;
    while ($i < $count){
        if($array[$i] % 5 == 0 && $array[$i] % 3 == 0){
            dd($array[$i]);
            }
        $i++;
    }

}
d2 ($mass);
*/


# 4создать массив, наполнить его случайными значениями (можно использовать функцию rand), найти максимальное и
# минимальное значение массива
/*
//for
$mass = [];

function maxMin ($array){
    for($i = 0; $i <= 10; $i++) {
        $array [] = rand(1, 20);
    }
    dd($array);

    $count = count($array);

    $a = 0;
    for($j = 0; $j < $count; $j++){
        if($array[$j] > $a){
            $a = $array[$j];
        }
    }
    echo "Максимальное число в массиве => $a" . "<br>";

    $b = $array[0];
    for($q = 0; $q < $count; $q++){
        if($array[$q] <= $b){
            $b = $array[$q];
        }
    }
    echo "Минимальное число в массиве => $b" . "<br>";



        $maxMass = [];
        for($z = 0; $z < $count; $z++){
            if($array[$z] == $a){
                $maxMass [] = $array[$z];
            }
        }
        $countMax = count ($maxMass);
    echo $countMax % 10 >= 2 && $countMax % 10 <= 4 && ($countMax % 100 >= 20 || $countMax % 100 < 10)?
        "Максимальное число $a в массиве повторяется $countMax раза" :
        ($countMax % 10 == 1 && $countMax % 100 != 11?
            "Максимальное число $a в массиве повторяется $countMax раз" :
            "Максимальное число $a в массиве повторяется $countMax раз");

    echo "<br>";


    $minMass = [];
    for($y = 0; $y < $count; $y++){
        if($array[$y] == $b){
            $minMass [] = $array[$y];
        }
    }
    $countMin = count ($minMass);
    echo $countMin % 10 >= 2 && $countMin % 10 <= 4 && ($countMin % 100 >= 20 || $countMin % 100 < 10)?
        "Минимальное число $b в массиве повторяется $countMin раза" :
        ($countMin % 10 == 1 && $countMin % 100 != 11?
            "Минимальное число $b в массиве повторяется $countMin раз" :
            "Минимальное число $b в массиве повторяется $countMin раз");
}
maxMin($mass);
*/


/*
//while

$mass = [];

function maxMin ($array){
    $i = 0;
    while($i <= 10){
        $array [] = rand(1, 20);
        $i++;
    }

    dd($array);

    $count = count($array);

    $a = 0;
    $j = 0;
    while($j < $count){
        if($array[$j] > $a){
            $a = $array[$j];
        }
        $j++;
    }
    echo "Максимальное число в массиве => $a" . "<br>";

    $b = $array[0];
    $q = 0;
    while($q < $count){
        if($array[$q] <= $b){
            $b = $array[$q];
        }
        $q++;
    }

    echo "Минимальное число в массиве => $b" . "<br>";



    $maxMass = [];
    $z = 0;
    while($z < $count){
        if($array[$z] == $a){
            $maxMass [] = $array[$z];
        }
        $z++;
    }
    $countMax = count ($maxMass);
    echo $countMax % 10 >= 2 && $countMax % 10 <= 4 && ($countMax % 100 >= 20 || $countMax % 100 < 10)?
        "Максимальное число $a в массиве повторяется $countMax раза" :
        ($countMax % 10 == 1 && $countMax % 100 != 11?
            "Максимальное число $a в массиве повторяется $countMax раз" :
            "Максимальное число $a в массиве повторяется $countMax раз");

    echo "<br>";


    $minMass = [];
    $y = 0;
    while($y < $count){
        if($array[$y] == $b){
            $minMass [] = $array[$y];
        }
        $y++;
    }
    $countMin = count ($minMass);
    echo $countMin % 10 >= 2 && $countMin % 10 <= 4 && ($countMin % 100 >= 20 || $countMin % 100 < 10)?
        "Минимальное число $b в массиве повторяется $countMin раза" :
        ($countMin % 10 == 1 && $countMin % 100 != 11?
            "Минимальное число $b в массиве повторяется $countMin раз" :
            "Минимальное число $b в массиве повторяется $countMin раз");
}
maxMin($mass);
*/



?>







