<?php
$n = 100;
$num= 1;
$flag = false;
while ( $num <= $n) {
	if (($num % 3 == 0) &&($num % 7 == 0)) {
		echo $num;
		echo "</br>";
		$flag = true;
	}
	$num++;
}

if ($flag == false) {
	echo "No such number!";
}