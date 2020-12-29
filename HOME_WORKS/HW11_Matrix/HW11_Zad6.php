<?php
$arr = [];
$rows = 4;
$cols = 5;
$num = 1;

for ($i=0; $i < $rows; $i++) { 
	$arr[$i] = [];
	for ($j=0; $j < $cols ; $j++) { 
		$arr[$i][$j] = $num;
		$num++;
			if ($i % 2 != 0) {
				rsort($arr[$i]);
			}
	}
}
echo "<table border='1'>";
for ($m=0; $m < $rows+1; $m++) {
	echo "<tr>";
	for ($k=0; $k < $cols-1; $k++) { 
		echo "<td>";
		echo $arr[$k][$m]; // Завъртам колоните да станат редое.
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";