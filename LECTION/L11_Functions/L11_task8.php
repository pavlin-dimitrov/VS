<?php

$arr = [[5, 14, 2,], [20, 9, 4,]];

function output( $arr ){
	$outer_counter=count($arr);

	for ($i=0; $i < $outer_counter; $i++) {
		$inner_count=count($arr[$i]);

		for ($j=0; $j < $inner_count; $j++){ 
			echo "[$i][$j] = ". $arr[$i][$j];
		}
		echo "<br>";
	} 
}

output ($arr);