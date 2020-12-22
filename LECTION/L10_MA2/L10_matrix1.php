<?php
$arr = [];
$rows = 4;
$cols = 4;

for ($i=0; $i < $rows; $i++) { 
	$arr[$i] = [];
	for ($j=0; $j < $cols ; $j++) { 
		$arr[$i][$j] = 1;
	}
}

// echo "<pre>";
// echo var_dump($arr);
// echo "</pre>";

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