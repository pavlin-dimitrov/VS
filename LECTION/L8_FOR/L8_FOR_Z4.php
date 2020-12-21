<?php

$arr = [1, 2, 5, 7, 'rt', true];
//echo $arr[3];
//echo $arr[5];

$count = count($arr);
for ($i=0; $i <= $count - 1 ; $i++) {  // for ($i=0; $i < $count ; $i++)
	echo $arr[$i] . ' ';
}