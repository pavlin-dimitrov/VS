<?php

$arr = [[5, 14, 2,], [20, 9, 4,]];

function output( $arr ){

	for ($i=0; $i < count($arr); $i++) { 
		for ($j=0; $j < count($arr[$i]) ; $j++){ 
			echo "[$i][$j] = ". $arr[$i][$j];
		}
		echo "<br>";
	} 
}

output ($arr);

// Да погледна кога и конкретно каунта който тя написа.