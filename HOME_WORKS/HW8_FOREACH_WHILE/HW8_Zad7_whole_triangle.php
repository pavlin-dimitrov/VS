<?php
//Whole triangle
$x = 1;
while ( $x <= 10 ) {
    $y = 1;
    while($y <= 10 - $x)
    {
        echo "&nbsp";
        ++$y;
    }
    $y=1;
    while ($y <= $x) {
        echo "a";
        ++$y;
    }
    echo "<br/>";
    ++$x;
}