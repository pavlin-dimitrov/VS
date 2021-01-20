<?php


function are_incr_num ($arr){
	$count = count($arr);
	$token = 1;
	$max_len = 1;

	for ($i = 1 ; $i < $count ; $i++) { 
	 	
	 	if ($arr[$i] > $arr[$i-1]) {
	 		$token++;
	 	} else {
	 		if ($token > $max_len) {
	 			$max_len = $token;
	 		}	
	 	$token = 1;
	 	}
	 } 
	 if ($token > $max_len) {
	 	$max_len = $token;
	 }
	 return $max_len;
}

$arr = [1,2, 8, 9, 10, 12, 13, 58, 3, 6, 8, 10, 12, 18, 20, 21, 25, 29];
echo are_incr_num($arr);