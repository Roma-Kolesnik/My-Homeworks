<?php
#Первый уровень:

#1
/*
$name = fopen ("number.txt", "r");
$lang = fgets($name);
if ($lang == "ru"){
	echo"<pre>";
	print_r ($arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']);
}elseif($lang == "en"){
	echo"<pre>";
	print_r ($arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn']);
}else{
	echo "Такого языка нет в базе";
}
*/


/*
$name = fopen ("number.txt", "r");
$lang = fgets($name);
switch($lang){
	case ("ru"):
		echo"<pre>";
		print_r($arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']);
		break;
	case ("en"):
		echo"<pre>";
		print_r($arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn']);
		break;
	default:
		echo "Такого языка нет в базе";
		break;
}
*/



/*
$name = fopen ("number.txt", "r");
$lang = fgets($name);
echo "Ваш язык: <strong> $lang </strong><br>";
echo $lang == "ru"? "['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']":"Такого языка нет в базе";
echo $lang == "en"? "['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn']":" ";
*/

#2
/*
$month = rand(1,12). "<br>";
echo "Месяц по счёту - $month";
if (($month == 12) || ($month == 1) || ($month == 2)){
	echo "Это ЗИМА!";
}elseif(($month == 3) || ($month == 4) || ($month == 5)){
	echo "Это ВЕСНА!";
}elseif(($month == 6) || ($month == 7) || ($month == 8)){
	echo "Это ЛЕТО!";
}elseif(($month == 9) || ($month == 10) || ($month == 11)){
	echo "Это ОСЕНЬ!";
}
*/

/*
$month = rand(1,12) . "<br>";
echo "Месяц по счёту - $month";
switch($month){
	case ($month == 12) || ($month == 1) || ($month == 2):
		echo "Это ЗИМА!";
		break;
	case ($month == 3) || ($month == 4) || ($month == 5):
		echo "Это ВЕСНА!";
		break;
	case ($month == 6) || ($month == 7) || ($month == 8):
		echo "Это ЛЕТО!";
		break;
	case ($month == 9) || ($month == 10) || ($month == 11):
		echo "Это ОСЕНЬ!";
		break;
}
*/

/*
$month = rand(1,12) . "<br>";
echo "Месяц по счёту - $month";
echo $month == ($month == 12) || ($month == 1) || ($month == 2)?"Это ЗИМА!": ($month == ($month == 3) || ($month == 4) || ($month == 5)? "Это ВЕСНА!":($month==($month == 6) || ($month == 7) || ($month == 8)? "Это ЛЕТО!":($month == ($month == 9) || ($month == 10) || ($month == 11)? "Это ОСЕНЬ!":"ERROR")));
*/

#3
/*
$minutes = rand(1,59);
echo "Время: <strong> $minutes </strong> <br>";
if($minutes >= 1 && $minutes <=15){
	echo "I четверть";
}elseif($minutes >= 16 && $minutes < 30){
	echo "II четверть";
}elseif($minutes == 30){
	echo "Половина";
}elseif($minutes >= 31 && $minutes <= 45){
	echo "III четверть";
}elseif ($minutes >= 46 && $minutes <= 59){
	echo "IV четверть";
}
*/

/*
$minutes = rand(1,59);
echo "Время: <strong> $minutes </strong> <br>";
switch($minutes){
	case ($minutes >= 1 && $minutes <=15):
		echo "I четверть";
		break;
	case ($minutes >= 16 && $minutes < 30):
		echo "II четверть";
		break;
	case ($minutes == 30):
		echo "Половина";
		break;
	case ($minutes >= 31 && $minutes <= 45):
		echo "III четверть";
		break;
	case ($minutes >= 46 && $minutes <= 59):
		echo "IV четверть";
		break;

}
*/

/*
$minutes = rand (1,59);
echo "Время: <strong> $minutes </strong> <br>";
echo $minutes >= 1 && $minutes <=15?"I четверть":($minutes >= 16 && $minutes < 30?"II четверть":($minutes == 30?"Половина":($minutes >= 31 && $minutes <= 45?"III четверть":($minutes >= 46 && $minutes <= 59?"IV четверть":"ERROR"))));
*/

#4
/*
$number = fopen("number.txt", "r");
$a = fgets ($number);
if ($a == 0){
	echo ($a + 7);
}elseif($a == 2){
	echo ($a + 7);
}else{
	echo ($a / 10);
}
*/

/*
$number = fopen("number.txt", "r");
$a = fgets ($number);
switch($a){
	case ($a == 0):
		echo ($a + 7);
		break;
	case ($a == 2):
		echo ($a + 7);
		break;
	default:
		echo ($a / 10);
		break;

}
*/

/*
$number = fopen("number.txt", "r");
$a = fgets ($number);
echo "Your number is <strong>$a</strong> <br>";
$seven = $a + 7;
$ten = $a / 10;
echo $a == 0? "$seven":($a == 2? "$seven":"$ten");
*/

#5
/*
$a = 0;
$b = 6;
if($a <= 1 && $b >= 3){
	echo $sum = $a + $b;
}else{
	echo $r = $a - $b;
}
*/

/*
$a = 0;
$b = 6;
switch($b){
	case($a <= 1 && $b >= 3):
		echo $sum = $a + $b;
		break;
	default:
		echo $r = $a - $b;
		break;
}
*/

/*
$a = 2;
$b = 2;
$sum = $a + $b;
$r = $a - $b;
echo $a <= 1 && $b >=3? "$sum":"$r";
*/



#fizz-buzz
/*

$first = 2;


$second = 5;


$third = 18;

for ($i = 1; $i <= $third; $i++){
	if ($i % $first == 0 && $i % $second == 0){
		echo "FB";
	}elseif($i % $first == 0){
		echo "F";
	}elseif($i % $second == 0){
		echo "B";
	}else{
		echo $i;
	}
}
*/



/*
$first = 2;
$second = 5;
$third = 18;
for ($i = 1; $i <= $third; $i++){
	echo $i % $first == 0 && $i % $second == 0? "FB":($i % $first == 0?"F":($i % $second == 0?"B":"$i"));
}
*/




























