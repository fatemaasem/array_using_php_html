<?php
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
//function to find the maximum and minimum number from any numbers of arrays
function find_the_maximum_and_minimum_in_arrays(...$arrays){
$mi=100000;
$ma=0;
$arr=[];

foreach($arrays as $array){
$mi_in_array=min(($array));
$mi=min($mi,$mi_in_array);
$ma_in_array=max(($array));
$ma=max($ma,$ma_in_array);
}
$arr[0]=$mi;
$arr[1]=$ma;
return $arr;
}
$array_contain_maximum_and_minimum= find_the_maximum_and_minimum_in_arrays($marks1,$marks2,$marks3);
?>