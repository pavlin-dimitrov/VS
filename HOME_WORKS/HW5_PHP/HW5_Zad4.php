<?php
// Програма, която по въведени 2 числа отпечатва дали техния сбор е положително или отрицателно число. РЕШЕТЕ ПО 2 НАЧИНА.
// ВАРИАНТ 1;
$a =-2;
$b =1;

$c = $a + $b;

if ($c < 0) {
	echo "Less then zero";
} elseif ($c > 0) {
	echo "Greater then zero";
} else {
	echo "zero";
}

echo "<br>";
// ВАРИАНТ 2;

switch ($c) {
	case 0:
		echo "zero";
		break;	
	case ($c < 0):
		echo "Less then zero";
		break;
	case ($c > 0):
		echo "Greater then zero";
		break;

}