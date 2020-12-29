<?php
$arr = [];
$rows = 4;
$cols = 3;
$num = 1;

$f = 8;
$val ='';
for ($i=0; $i < $rows; $i++) { 
	$arr[$i] = [];
	for ($j=0; $j < $cols ; $j++) { 
		if ($i <= 1 && $j = 0) {
			$arr[$i][$j] = $val . $num;
		} else {
			$num = 9;
			$val = $f;
			$arr[$i][$j] = $val.$num; 
			//$val = $f;
		}
	}
$num = $val . $f . $num;
} 
echo "<table border='1'>";
for ($m=0; $m < $rows; $m++) {
	echo "<tr>";
	for ($k=0; $k < $cols; $k++) { 
		echo "<td>";
		echo $arr[$m][$k];
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";