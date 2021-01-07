<?php

$rows = 4;
$cols = 5;


function create_arr($rows, $cols) {
	$arr = [];
	$num = 1;
	for ($i=0; $i < $rows; $i++) { 
		$arr[$i] = [];
			for ($j=0; $j < $cols ; $j++) { 
				$arr[$i][$j] = $num;
					$num+=2;
			}
	}
	return $arr;
}

function print_arr ($arr){
echo "<table border='1'>";
$rows = count($arr);
for ($m=0; $m < $rows; $m++) {
	echo "<tr>";
	$cols = count($arr[$m]);
	for ($k=0; $k < $cols; $k++) { 
		echo "<td>";
		echo $arr[$m][$k];
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
}

$arr = create_arr($rows, $cols);
print_arr ($arr);