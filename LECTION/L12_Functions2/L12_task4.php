<?php
$input = "abba";
//$input = "test test";

function is_palintrome($par){
$arr = str_split($par);
$count = count($arr)/2;
$flag = true;
	for ($i=0; $i < $count; $i++) { 
		$ind = $count-1-$i;
		if($arr[$i] != $arr[$ind]){
			$flag = false;
			break;
		}
	}
	if ($flag) {
		echo "yes";
		} else {
		echo "no";
		}
}

is_palintrome($input);