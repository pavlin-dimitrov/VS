<?php
$arr = [];
$rows = 5;
$cols = 5;
$num = $rows*$cols;

for ($i=0; $i < $rows; $i++) { 
	$arr[$i] = [];
	for ($j=0; $j < $cols ; $j++) { 
		$arr[$i][$j] = $num;
		$num--;			
	}
}
echo "<table border='1'>";
for ($m=0; $m < $rows; $m++) {
	echo "<tr>";
	for ($k=0; $k < $cols; $k++) { 
		echo "<td>";
		echo $arr[$k][$m]; // Завъртам колоните да станат редое.
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";