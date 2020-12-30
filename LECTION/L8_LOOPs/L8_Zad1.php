<?php  
// Zad.1 - Masi. Otpe4ataite proizwedenieto na vsi4ki elementi v masiva.

$arr = [1, 2, 3, 4,];

$m = 1;

if (isset($arr)) {
	if (empty($arr)) {
		echo "Not a valid input";
	} else {
foreach ($arr as $value) {
	$m = $m * $value;
	}
	echo ' m2= ' . $m;
		   }
}
?>