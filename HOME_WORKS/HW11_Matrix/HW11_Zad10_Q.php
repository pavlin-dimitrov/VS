<?php
$arr = [];
    $counter = 1;
    $startCol = 0;
    $endCol = 4 - 1;
    $startRow = 0;
    $endRow = 4 - 1;
    while ($startCol <= $endCol && $startRow <= $endRow) {
        for ($i = $startRow; $i <= $endRow; $i++) {
            $arr[$i][$startCol] = $counter;
            $counter++;
        }
        $startCol++;
        for ($j = $startCol; $j <= $endCol; $j++) {
            $arr[$endRow][$j] = $counter;
            $counter++;
        }
        $endRow--;
        for ($i = $endRow; $i >= $startRow; $i--) {
            $arr[$i][$endCol] = $counter;
            $counter++;
        }
        $endCol--;
        for ($j = $endCol; $j >= $startCol; $j--) {
            $arr[$startRow][$j] = $counter;
            $counter++;
        }
        $startRow++;
    }

echo "<table border='1'>";
for ($m=0; $m < 4; $m++) {
    echo "<tr>";
    for ($k=0; $k < 4; $k++) { 
        echo "<td>";
        echo $arr[$m][$k]; // РАЗМЕНЯМ $m и $k и получавам решението на 10-та задача. - Втори вариант за по-лесно решение.
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";