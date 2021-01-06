<?php

$arr = [2,11,2,3,0,2,];
$number = 0;
function search($input, $arr){
 $found = 0;
 for ($i=0; $i < count($arr); $i++) { 
 	if ($arr[$i] == $input) {
 		$found++;
 	}
 }
 if ($found > 0) {
 	return $found;
 } else {
 	return 'Not in array';
 }
}

echo search($number, $arr);