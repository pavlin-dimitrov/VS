<?php
if (isset($_POST['angle_a']) && isset($_POST['angle_b']) && isset($_POST['angle_c'])) {

	$a = $_POST['angle_a'];
	$b = $_POST['angle_b'];
	$c = $_POST['angle_c'];
	if ($a == 0 || $b == 0 || $c == 0) {
		echo "Not valid";
	} else {
		if (($a + $b + $c) == 180) {
			echo "Valid";
		} else {
			echo "Not valid";
		}
	}
}
//////Този файл трябва да е с име script.php  и да има линк към него в предния файл...