<?php

#1
/*
$arr = range(1,100);
echo array_sum($arr);
*/


#2
/*
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr = array_map('strtoupper',$arr);
echo "<pre>";
print_r ($arr);
*/

#3
/*
$arr = [1,2,3,4,5,'i'];
echo count($arr);
*/

#4
/*
$arr = [1,2,3,4,5,'i',10,50];
$how = count($arr) - 1;
echo "<pre>";
print_r($arr[$how]);
*/

#5
/*
$arr = [1,2,3,4,5];
if (in_array("3",$arr)){
	echo "Has 3";
}else{
	echo"Hasn't 3";
}
*/

#6
/*
$arr = [1,2,3,4,5];
echo array_sum($arr);
*/

#7
/*
$arr = [1,2,3,4,5,6];
echo array_sum($arr) / count($arr);
*/

#8
/*
$arr1 = [1,2,3];
$arr2 = ["a","b","c"];
echo "<pre>";
print_r(array_merge($arr1, $arr2));
*/

#9
/*
$arr = [1,2,3,4,5];
$result = array_slice($arr, 1,3);
echo "<pre>";
print_r($result);
*/

//$arr = range(1,100); - наполнение массива
//array_sum($arr); - выводит сумму чисел из массива
//$arr = array_map('strtoupper',$arr); - поднимает все заглавные буквы
//count($arr); - считает количество элементов в массиве
//in_array("3",$arr) - проверка на существование символа в массиве
//print_r(array_merge($arr1, $arr2) - слияние массивов
//$result = array_slice($arr, 1,3); - вырезать все элементы массива, и указать диапазон


/*
$str = "12345";
if ($str[0] == 1 || $str[0] == 2 || $str[0] == 3){
	echo "Yes";
}else{
	echo "No";
}



$str = "12345";
echo $str[0] == 1 || $str[0] == 2 || $str[0] == 3? "Yes":"No";



$a = "123321";
if ($a[0]+$a[1]+$a[2] === $a[3]+$a[4]+$a[5]){
	echo "Yes";
}else{
	echo "No";
}


$a= "123321";
echo ($a[0]+$a[1]+$a[2] === $a[3]+$a[4]+$a[5])?"Yes":"No";
*/


$a = "56788765";
$st = strlen($a);
$sum1 = ($st / 2);
if($st % 2 == 0){
	for($i = 1;$i <= $sum1;$i++){
	}
}






































