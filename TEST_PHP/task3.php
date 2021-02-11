<?php
$arr = [];
$rows = 5;
$cols = 4;
$num = 1;

$num2 = $num;

for ($i = 0; $i < $rows; $i++){
    $arr[$i] = [];
    for ($j = 0; $j < $cols; $j++){
        $arr[$i][$j] = $num2;
        $num2+= 15;
    }
    $num = $num + 3;
    $num2 = $num;
}
echo "<table border='1'>";
for ($m = 0; $m < $rows; $m++){
    echo "<tr>";
    for ($k = 0; $k < $cols; $k++){
        echo "<td>";
        echo $arr[$m][$k];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";