<?php

#1
/*
$str = '12345';
function sum($sum){
$strArr = str_split($sum);
foreach($strArr as $value){
$result += $value;
}
echo $result;
return true;
}
sum($str);
*/

#2
/*
$str = "123876453487657621244";

function searchNumber($string, $needle) {
	$count = substr_count($string, $needle);
//	if($count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 >= 20 || $count % 100 < 10)) {
//		echo "Цифра $needle в строке $string повторяется $count раза";
//	}
//	elseif($count % 10 == 1 && $count % 100 != 11) {
//		echo "Цифра $needle в строке $string повторяется $count раз";
//	}
//	else {
//		echo "Цифра $needle в строке $string повторяется $count раз";
//	}
	echo $count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 >= 20 || $count % 100 < 10)?"Цифра $needle в строке $string повторяется $count раза":($count % 10 == 1 && $count % 100 != 11? "Цифра $needle в строке $string повторяется $count раз" : "Цифра $needle в строке $string повторяется $count раз");
}

echo searchNumber($str, 5);
*/


#3

/*
$num = 40;

function wholeNumbers($number) {
	if($number == 0){
		echo "На ноль делить нельзя!";
	}
	for($i = 1; $i <= $number; $i++) {
		if($number % $i == 0) {
			echo $i."<br>";
		}
	}
	return true;
}

wholeNumbers($num);
*/


#4
/*
function allName($second_name, $name, $third_name) {
	echo "$second_name $name[0]. $third_name[0].<br>";



}

allName("Ivanov","Ivan", "Petrovich");
*/


#5

$myCity = "Nickopol";

function cityes($city)
{
    $arr = ['Kharkov', 'Kiev', 'Voronezh', 'Zhitomir', 'Romny', 'Nickopol', 'Lvov', 'Volgograd', 'Donetsk', 'Kalyga',
        'Ahtyrka', 'Aleksandriya', 'Yalta', 'Arhangelsk', 'Kremenchyk', 'Gadych', 'Cherkasy', 'Summy', 'Meletopol', 'London'];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    $a = $city;
    $endLatter = substr($city, -1);
    $result = strtolower($endLatter);
    //echo $result;
    if ($result == "y") {
        $i = strlen($a) - 2;
        $last = ($a[$i]);
        $up = mb_strtoupper($last);
        foreach ($arr as $key => $cityes) {
            echo strstr($cityes, $up);
            unset($arr[$key]);
            break;
        }
    } else {
        $up2 = mb_strtoupper($result);
        foreach ($arr as $keys => $cityess) {
            echo strstr($cityess, $up2);

        }
    }
}

cityes($myCity);


function dd($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}





#6 Первый уровень

/*
define("FIVE",5);
for($i = 1;$i <= 100;$i++){
	echo $i % FIVE == 0?"$i":" ";
	//echo $i % FIVE == 0?"$i":"<pre>";
}
*/


/*
function fun($number){
	define("NUM", $number);
	$primes = array();
	$searching_number = 2;
	$is_prime = true;
	while (count($primes) <= $number) {
		for ($i=2; $i<$searching_number; $i++) {
			if ($searching_number % $i == 0) {
				$is_prime = false;
				break;
			}
		}
		if ($is_prime) {
			array_push($primes, $searching_number);
		}
		$is_prime = true;
		$searching_number++;
	}
	echo "<pre>";
	print_r($primes);
	echo "</pre>";
}

fun(100);
*/






























?>



















