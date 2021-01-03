<?php



// function num_loop($tag, $i){
// 	if ($i = 11){
// 		for ($i=11; $i <= 42 ; $i++) { 
// 			echo "<$tag>";
// 			echo $i;
// 			echo "</$tag>";
// 		}
// 	} elseif ($i = 42) {

// 		for ($i= 42; $i >= 11 ; $i--) { 
// 			echo "<$tag>";
// 			echo $i;
// 			echo "</$tag>";
// 		}
// 	}
// }


// num_loop('h3', 42);

$a = 11;
$b = 42;
function num($a, $b, $tag = 'p'){
	if ($a > $b) {
		for ($num = $a; $num >= $b; $num--) { 
			echo "<$tag>" .$num. "<$tag>";
		}
	} elseif ($b < $a) {
		for ( $num = $a; $num <= $b; $num++ ) { 
			echo "<$tag>" .$num. "<$tag>";
		}
	} else {
		echo "<$tag>" .$a. "<$tag>";
		echo "<$tag>" .$b. "<$tag>";
	}
}


num($a, $b, 'h3');