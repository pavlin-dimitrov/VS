<?php
//17-ta zad.
// otpe4ataite ot 1 do 300
// na vseki red otp. 10 4isla

$check = 1;
for ($i=1; $i <= 300; $i++) { 
	
	echo $i . ' ';
	if ($check == 10) {
		echo "</br>";
		$check = 0;
	}
	$check++;
}
