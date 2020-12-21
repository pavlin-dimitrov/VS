<?php
//SHORT;

// $arr = [0,1, 2, 0, 3, 0, 1,0];
// $min = min (array_diff($arr, array(0)));
// echo $min;

//LONG;
$arr = [0,90,20,30,10,50,10,60,110,10,120,40,10];
$b = count($arr);
$lowest = max($arr);

for ($i=0; $i < $b ; $i++) { 

		if ($lowest >= $arr[$i] || $lowest <= 0) {
			$lowest = $arr[$i] . ' ';
		} else {
			continue;
		}
}
echo $lowest;
