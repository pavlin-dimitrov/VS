<?php
$arr = [];
    $counter = 1;
    $startCol = 0;
    $endCol = 6 - 1;
    $startRow = 0;
    $endRow = 6 - 1;
    while ($startCol <= $endCol && $startRow <= $endRow) {
        for ($i = $startCol; $i <= $endCol; $i++) {
            $arr[$startRow][$i] = $counter;
            $counter++;
        }
        $startRow++;
        for ($j = $startRow; $j <= $endRow; $j++) {
            $arr[$j][$endCol] = $counter;
            $counter++;
        }
        $endCol--;
        for ($i = $endCol; $i >= $startCol; $i--) {
            $arr[$endRow][$i] = $counter;
            $counter++;
        }
        $endRow--;
        for ($i = $endRow; $i >= $startRow; $i--) {
            $arr[$i][$startCol] = $counter;
            $counter++;
        }
        $startCol++;
    }

echo "<table border='1'>";
for ($m=0; $m < 4; $m++) {
	echo "<tr>";
	for ($k=0; $k < 4; $k++) { 
		echo "<td>";
		echo $arr[$m][$k]; // РАЗМЕНЯМ $m и $k и получавам решението на 10-та задача.
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";