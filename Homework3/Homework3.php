<?php

#1
/*
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
function df($MySTR, $FILE = 'MyLog.txt'){
$date = date("Y-m-d G:i:s");
$fp = fopen($_SERVER["DOCUMENT_ROOT"] . $FILE, '+a');
$str = $date . " " .  print_r($MySTR, true). "\r\n";
fwrite ($fp, $str);
fclose($fp);
}
df("aaaaaaaaaaa",'MyLog.txt');
*/

#2
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
/*
function units($first, $second, $third, $count = 1) {

	if($count - round($count) != 0) {
		$output = $first;
	}
	else {
		if($count % 10 == 1 && $count % 100 != 11) {
			$output = $first;
		}
		elseif($count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 >= 20 || $count % 100 < 10)) {
			$output = $second;
		}
		else {
			$output = $third;
		}
	}
	return $output;
}

echo units("ноутбук", "ноутбука", "ноутбуков", "24");
*/


#3
/*
function editData ($DATA){
	$MES = array(
		"01" => "января",
		"02" => "февраля",
		"03" => "марта",
		"04" => "апреля",
		"05" => "мая",
		"06" => "июня",
		"07" => "июля",
		"08" => "августа",
		"09" => "сентября",
		"10" => "октября",
		"11" => "ноября",
		"12" => "декабря"
	);
	foreach($MES as $number => $name){
		switch($number) {
			case ($number == $DATA):
				echo $name;
				break;
		}
	}
}

editData("06");
*/

#4
/*
$a = 6;
$b = 4;
function sum (){
	global $a, $b;
	$sum = $a + $b;
	echo $sum;
	return 1;
}
sum();//10
*/

#5
/*
$a = 1;
function myFunc(){
	static $b = 0;
	global $a;
	echo $b += $a;
	return 1;
}

myFunc();//1
myFunc();//2
myFunc();//3
//Числа каждый раз выводятся разные, потому что с помощью статической переменной (static) программа запоминает значение переменной b и не считает его заново, то есть с каждым вызовом нашей функции число будет увеличиваться на 1, так как мы каждый раз прибавляем к нему глобальную переменную а (которая имеет значение 1).
*/

#6
/*
$a = 1;
$b = 2;
$c = 3;
unset($a);
unset($b);
unset($c);
echo $a;//nothing
function example($a, $b, $c){
	echo $a, $b, $c;
return 1;
}
example($a,$b,$c);
*/

#7

//Почему в этом коде будет ошибка?
//Локальные и глобальные переменные
$a=1;
//Объявили новую пользовательскую функцию m_func()
function m_func(){
	$b=2;
	echo $a;
}
$c=3;
echo $a.'<br>';
echo $b.'<br>';
echo $c;
m_func();

//Ошибка в том, что в функции присутствует глобальная переменная, которую пытаются вывести, но функция не распазнаёт её, так как это не локальная переменная и чтобы она работала нужно перед её выводом объявить в функции global $a;
//Ещё ошибка в том, что хотят объявить переменную b, которая находится в функции


#9
/*
function pr($a, $b){
	echo $pr = $a * $b;
	return $pr;
}
pr(5,5);
*/

#10
/*
$a = 3;
$b = 2;
$c = 1;
echo  $a * $b * $c . "<br>";

function myFunc(&$a, &$b, $c){
$a = 5;
$b = 7;
$c = 10;
echo  $a * $b * $c;
}
myFunc($a,$b,$c);
*/
#11
/*
function func(){
	$numbers = (func_get_args());
	$sum = array_sum($numbers);
	$kol = func_num_args();
	$sr = $sum / $kol;
	echo $sr;
	return 1;
}

func(1, 2, 4, 5);
echo "<br>";
func(1, 2, 4, 5, 7, 8, 8);
*/

#12
/*
function fibonacci($n) {
return $n <= 1? $n: fibonacci($n -1) + fibonacci($n -2);
}
	for($n = 1; $n <= 16; $n++) {
		echo(fibonacci($n).", ");
	}
*/











