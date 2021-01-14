<?php
$arr_31 = ['January', 'March', 'May', 'July', 'August','October', 'December'];
$date = '30 February';
function is_valid_date($date_str){
	$arr_30 = ['April', 'June', 'September', 'November'];

	$arr = explode(' ', $date_str);
	if ($arr[0] < 1 || $arr[0] > 31) {
		return "Not a valid date";
	} else {
		if (in_array($arr[1], $arr_30)) {
			if ($arr[0] > 30) {
				return "Not a validdate";
			}
		} elseif ($arr[1] == 'February') {
			if ($arr[0] > 29) {
				return 'Not a valid date';
			}
		}
	}
		return 'valid date';
}
echo is_valid_date($date);