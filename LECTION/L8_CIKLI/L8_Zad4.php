<?php
$arr = [1,2,3,0,4,10,10,'10','2.5',];

$n = 2;
foreach ($arr as $ind => $value) {
	if ($value == 0) {
		continue;
	}
	if (is_numeric($ind) && is_numeric($value)) {		
		if ($value > $n) {
			echo $ind * $value;			
			echo "</br>";		
		}	
	}
}