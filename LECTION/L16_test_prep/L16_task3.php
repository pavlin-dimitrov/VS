<?php
$arr = [];
$rows = 5;
$cols = 4;
$number = 7;

$counter = $number;

for ($i = 0; $i < $rows; $i++){
    $arr[$i] = [];
    for ($j = 0; $j < $cols; $j++){
        $arr[$i][$j] = $counter;
        $counter+= 110;
    }
    $number = $number + 7;
    $counter = $number;
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