<?php
$cols = 10;
$rows = 10;
$number = 1;
$number2 = 0;
echo "<table border=\"1\">";


for ($r = 0; $r < $rows; $r++){

echo('<tr>');
if ($r == 0) {
    for ($i = 0; $i < $rows; $i++) {
        echo('<td>' .$number2++.'</td>');
    }
}

for ($c = 0; $c < $cols; $c++){
    if ($c == 0 && $r != 0) {
        echo('<td>' .$number++.'</td>');
    } else if ($r != 0) {
        echo( '<td>'$c.'*'.$r.' = ' .$c*$r.'</td>');
    }
}
echo('</tr>');
}

echo("</table>");