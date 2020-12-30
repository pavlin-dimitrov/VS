<?php
$arr = [];
$num = 1;
$n = 4;
$m = 3;
$var = '';
$mn = 8;
for ($i = 0; $i < $m; $i++)
 {
   for ($j = 0; $j < $n; $j++)
     {
     	if ($j == 0 && $i == 0) {
     		$arr[$j][$i] = $num;
     	} elseif ($j == 1 && $i == 0) {
     		$num = 9;
     		$arr[$j][$i] = $num;
     	} else {
        	$arr[$j][$i] = $mn . $num;
        	$num = 9;
        	$mn = $mn . 8;
    	}
     } 
 } 
 echo "<table border='1'>";
for ($t=0; $t < $j; $t++) {
    echo "<tr>";
    for ($k=0; $k < $i; $k++) { 
        echo "<td>";
        echo $arr[$t][$k];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";