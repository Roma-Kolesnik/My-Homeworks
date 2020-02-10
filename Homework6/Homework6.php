<?php

/*
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'test';
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    print_r("Connect failed^ %s \n", mysqli_connect_error());
    exit();
}

$SESSION = [];
$query = "SELECT * FROM test_user";

if($result = $mysqli -> query($query)){
    while($obj = $result -> fetch_assoc()){
        $SESSION[] = $obj;
        //var_dump($obj);
    }
    $result -> close();
}
$mysqli -> close();




foreach ($SESSION as $key => $names) {
    if ($names['gender'] == 'ж')
        echo messeg($names['last_name']) . "<br>";

}

function messeg($name)
{
    return $name . ", поздравляю тебя с 8 марта.";
}

function col(){
    echo func_num_args();
    return true;
}
col(1,2,3,4,7);
*/

/*
function days($a)
{
    switch ($a) {
        case($a == 1):
            echo "Понедельник";
            break;
        case($a == 2):
            echo "Вторник";
            break;
        case($a == 3):
            echo "Среда";
            break;
        case($a == 4):
            echo "Четверг";
            break;
        case($a == 5):
            echo "Пятница";
            break;
        case($a == 6):
            echo "Суббота";
            break;
        case($a == 7):
            echo "Воскресенье";
            break;
    }
}

$d = date("w");
days($d);

echo "<br>";

$days = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
echo $days[$d];
*/

/*
$days = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
function week($mass)
{
    $count = count($mass);
    $now = date("w");
    for ($i = 0; $i < $count; $i++) {
        if ($i == $now) {
            echo $mass[$i];
        }
    }
}

week($days);
*/

/*
$days = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
function week2($mass)
{
    foreach ($mass as $key => $names) {
        if ($key == date("w")) {
            echo $names;
        }
    }
}

week2($days);
*/

/*
$days = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
function week3($mass){
    $count = count($mass);
    $now = date("w");
    $i = 0;
    while($i < $count){
        if($i == $now){
            echo $mass[$i];
        }
        $i++;
    }
}

week3($days);
*/


/*

$arr = [2, 6, 999, 1, 10120, 11];

function maxx($mass)
{
    $a = 0;
    $count = count($mass);
    for ($i = 0; $i < $count; $i++) {
        if ($mass[$i] > $a) {
            $a = $mass[$i];
        }
    }
    echo($a);
}

maxx($arr);


echo "<br>";


function maximum($mass)
{
    $a = 0;
    $count = count($mass);
    $i = 0;
    while ($i < $count) {
        if ($mass[$i] > $a) {
            $a = $mass[$i];
        }
        $i++;
    }
    echo $a;
}

maximum($arr);


echo "<br>";


function max3($mass)
{
    $a = 0;
    $count = count($mass);
    $i = 0;
    do {
        $i++;
        if ($mass[$i] > $a) {
            $a = $mass[$i];
        }
    } while ($i < $count);
    echo $a;
}

max3($arr);


echo "<br>";

function max4($mass){
    $a = 0;
    foreach($mass as $key => $numbers){
        if($numbers > $a){
            $a = $numbers;
        }
    }
    echo $a;
}
max4($arr);

echo "<br>";

function minn($mass)
{
    $a = $mass[0];
    $count = count($mass);
    for ($i = 0; $i < $count; $i++) {
        if ($mass[$i] <= $a) {
            $a = $mass[$i];
        }
    }
    echo $a;
}

minn($arr);


echo "<br>";


function min3($mass)
{
    $a = $mass[0];
    $count = count($mass);
    $i = 0;
    do {
        if ($mass[$i] <= $a) {
            $a = $mass[$i];
        }
        $i++;
    } while ($i < $count);
    echo $a;
}

min3($arr);

echo "<br>";


function min2($mass)
{
    $a = $mass[0];
    $count = count($mass);
    $i = 0;
    while ($i < $count) {
        if ($mass[$i] <= $a) {
            $a = $mass[$i];
        }
        $i++;
    }
    echo $a;
}

min2($arr);

echo "<br>";

function min4($mass){
    $a = $mass[0];
    foreach($mass as $key => $numbers){
        if($numbers <= $a){
            $a = $numbers;
        }
    }
    echo $a;
}
min4($arr);

*/

/*
$arr = [10, 100, 523 , 29, 6812, 15, 576, 2];
function myFunc($mass)
{
    $count = count($mass);
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($mass[$i] > $mass[$j]) {
                $a = $mass[$j];
                $mass[$j] = $mass[$i];
                $mass[$i] = $a;
            }
        }
    }
    echo "<pre>";
    print_r($mass);
}

myFunc($arr);


function myFunc2($mass)
{
    $count = count($mass);
    $i = 0;
    while ($i < $count) {
        $j = $i + 1;
        while ($j < $count) {
            if ($mass[$i] > $mass[$j]) {
                $a = $mass[$j];
                $mass[$j] = $mass[$i];
                $mass[$i] = $a;
            }
            $j++;
        }
        $i++;
    }
    echo "<pre>";
    print_r($mass);
}

myFunc2($arr);


function myFunc3($mass)
{
    foreach ($mass as $key => $values) {
        foreach ($mass as $keys => $value) {
            if ($mass[$keys] > $mass[$key]) {
                $a = $mass[$key];
                $mass[$key] = $mass[$keys];
                $mass[$keys] = $a;
            }
        }
    }
    echo "<pre>";
    print_r($mass);
}

myFunc3($arr);
*/





















/*
$mass1 = ["Apple"];
$mass2 = ["Strawberry"];

function lenght ($arr1, $arr2){
    foreach ($arr1 as $str){
        $strlen = strlen($str);
       // echo $strlen;
    }
    foreach ($arr2 as $str2){
        $strlen2 = strlen($str2);
        //echo $strlen2;
    }

//    if($strlen > $strlen2){
//        $first = $strlen - $strlen2;
//        echo "Первая строка длиннее на $first символов";
//    }else{
//        $second = $strlen2 - $strlen;
//        echo "Вторая строка длинне на $second символов";
//    }

    if($strlen % $strlen2 != 0){
        $result = $strlen -$strlen2;
        echo $result;
    }else{
        $result2 = $strlen2 - $strlen;
        echo $result2;
    }

}

lenght($mass1, $mass2);
*/


/*
$array = [1,2,3];
$array2 = [4,5,6];
function summ ($array)
{
    $a = 0;
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $a += $array[$i];
    }
echo $a;
    return true;
}

summ($array);




function sum2 ($array)
{
    $a = 0;
    $count = count($array);
    $i = 0;
    while($i < $count){
        $a += $array[$i];
        $i++;
    }
    echo $a;
}

sum2($array);


function sum3($mass){
    $a = 0;
    foreach($mass as $key => $values){
            $a += $values;
    }
    echo $a;
}

sum3($array);
*/


/*
$flatNumber = 124;
$blockOfFlat = 9;
$levelFlat = 4;

function courier($flat, $blockOfFlat, $levelFlats)
{

    $minus = $flat - 1; //уменьшаем искомую кв на -1
    $flatsInPorch = $blockOfFlat * $levelFlats; // сразу посчитаем кол квартир на подьезд

    $porch = $minus / $flatsInPorch + 1; //вычесляем нужный подьезд
    $level = ($minus - ((int)$porch - 1) * $flatsInPorch) / $levelFlats + 1; //вычесляем нужный этаж
    echo "Подъезд №" . (int)$porch . "<br> Этаж №". (int)$level;





//    $p = ($flat - 1) / ($blockOfFlat * $levelFlats);
//    $e = (($flat - ($p -1)* $blockOfFlat * $levelFlats) - 1) / $levelFlats + 1;
//    echo "Квартира # $flat  находится в $p подъезде на этаже # $e";

//echo "<br>";

//    $porch1 = $blockOfFlat * $levelFlats;//квартир в подъезде
//    $x = ($flat -1) / $porch1;
//    echo "Подъезд №".(int)$porch = $x + 1 ;//Вывод номера подъезда
//    echo  "<br>";
//    $x1 = ($flat -1) % $porch1 + 1;//Остаток от деления
//    $q = $x1 / $levelFlats + 1; // Номер этажа
//    echo "Этаж №" . (int)$q;

//echo "<br>";

//    $porch1 = $blockOfFlat * $levelFlats;//квартир в подъезде
//    $porch = $flat / $porch1 + 1;//номер искомой квартиры делённое на количество квартир в одном подъезде + 1(то есть без нулевой)
//    $m = (int)$porch;
//    echo "Подъезд № ".$m ."<br>";//Вывод номера подъезда
//    $lev = ($flat - ($m - 1) * $porch1) / $levelFlats + 1;//(№ квартиры - (№подъезда - 1) умноженное на кол-во квартир в подъезде) делённое на кол-во квартир на одном этаже
//    $n = (int)$lev;
//    echo "Этаж №".$n;//Вывод номера этажа
}

courier($flatNumber, $blockOfFlat, $levelFlat);
*/






