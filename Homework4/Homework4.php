<?php

#1

/*
$mas = [19,1000,20,40,1,100,2,3,56,3];
big($mas);
function big($mass){
	echo "<pre>";
	print_r($mass);
	echo "</pre>";
	echo "<br>";
	$m = max($mass);
	$ser = array_search($m, $mass);
	unset($mass["$ser"]);
	echo "Ваш массив без наибольшего числа";
	echo "<pre>";
	print_r($mass);
	echo "</pre>";
	return 1;
}
*/


#2
/*
$mass = ["lemon", "Mark","strawberry","Nick", "black"];
function long($a){
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	$max = max($a);
	echo"Самая длинная строка в массиве: ";
	echo $max;
	$search = array_search("$max", $a);
	echo "<br>";
	unset($a["$search"]);
	echo "Ваш массив без самой длинной строки:";
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	return 1;
}
long($mass);
*/


#3

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


echo '<pre>';


/*
//Сортироовка по имени
function myCmp($a, $b){
    if($a["last_name"] == $b["last_name"])return 0;
    return $a["last_name"] > $b["last_name"]? 1: -1;
}
usort($SESSION, "myCmp");
print_r($SESSION);
/*

function names($a,$b){
	return strnatcasecmp($a["first_name"],$b["first_name"]);
}
	uasort($SESSION, 'names');
	print_r($SESSION);


	echo "<br>";


$ss = array_values($SESSION);
foreach($SESSION as $arr) {
	$pos = strpos($arr['tel'] , '+38095');
	if ($pos === false){
		echo "False - not items <br>";
	}elseif($arr['gender'] == "м"){
		print_r($arr). "<br>";
	}
}


$first_name = array_column($SESSION, "first_name");
array_multisort($first_name, SORT_ASC, $SESSION);
echo "<pre>";
print_r($SESSION);
echo "</pre>";


foreach($SESSION as $item){
    $aa[$item["first_name"]] = $item;
}

ksort($aa);
echo "<pre>";
print_r($aa);
echo "</pre>";
*/
#4

/*
$arr = ['Example_or_check'];
function ss ($mass){
	foreach($mass as $str)
	foreach(count_chars($str, 1) as $letter => $quantity) {
		echo "\"" , chr($letter) , "\" встречается в строке $quantity раз.\n". "<br>";
	}
}


ss($arr);
*/


















