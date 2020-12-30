<?php
$arr = [];
$num = 1;
$n = 4;
for ($i = 0; $i < $n; $i++)
 {
   for ($j = 0; $j < $n; $j++)
     {
        $arr[$j][$i] = $num++;
      }   
 }
 echo "<table border='1'>";
for ($m=0; $m < $i; $m++) {
    echo "<tr>";
    for ($k=0; $k < $j; $k++) { 
        echo "<td>";
        echo $arr[$m][$k];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";