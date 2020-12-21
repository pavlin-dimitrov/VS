<?php
$arr = [1,2,3,4,5,6,7];

$m = 1;
$flag = true;
if (isset($arr)) {
	if (empty($arr)) {
		echo "Not a valid input";
	} else {
		foreach ($arr as $value) {
			if (is_numeric($value)) {
				$m = $m * $value;
			} else {

				//echo "Not a valid input";
				$flag = false;
				break;
 			}
		}
		if ($flag == true) {
			echo $m;
		} else {
			echo 'Not a valid input!';
		}
	}
}