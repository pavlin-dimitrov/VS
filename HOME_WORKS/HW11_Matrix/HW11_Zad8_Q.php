<?php
$matrix = [];
$rows = 0;
$cols = 0;
$startCount = 1;
$n = 4;

for ($i = $n - 1; $i >= 0; $i--)
 {
    $rows = $i;
    $cols = 0;
       while ($rows < $n && $cols <= $n)
        {
            $matrix[$rows++][$cols++] = $startCount++;
        }
 }
for ($j = 1; $j < $n; $j++)
 {
    $rows = $j;
    $cols = 0;
        while ($rows < $n && $cols <= $n)
         {
            $matrix[$cols++][$rows++] = $startCount++;
         }
 }
echo "<table border='1'>";
for ($m=0; $m <= $n-1; $m++) {
    echo "<tr>";
    for ($k=0; $k <= $n-1; $k++) { 
        echo "<td>";
        echo $matrix[$m][$k];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";        