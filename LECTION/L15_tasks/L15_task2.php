<?php
function print_nums( $n, $m){
	

	 for ($i=$n; $i <= $m ; $i++) { 
	 	echo "<span> $i </sapn>";
	 	$flag = true;
	 	for ($j= $n; $j <= $i/2 ; $j++) { 
	 		if ($i % $j == 0) {
	 			$flag = false;
	 			break;
	 		}
	 	}
	 	if ($flag == true) {
	 		echo "<span style='color: red' >$i</span>";
	 	} else {
	 		echo "<span> $i </span>";
	 	}
	 }
}


$n = 2;
$m = 100;
print_nums($n, $m);