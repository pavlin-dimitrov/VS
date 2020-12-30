<?php
$arr = [25, 2, 105];
$max = $arr[0];
$flag = true;

if (isset($arr)) {
	if (empty($arr)) {
		echo "Empty array";
	} else {
		foreach ($arr as $value) {
			if(is_numeric($value)) {
				if ($max < $value) {
					$max = $value;
				}
			} else{ 
				$flag = false;
				break;
			}
		}
		if ($flag == true) {
			echo $max;
		} else {
			echo "not a valid input";
		}
		}
}
 