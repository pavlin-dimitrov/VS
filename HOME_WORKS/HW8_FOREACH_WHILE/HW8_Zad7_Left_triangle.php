<?php
//Right part of triangle
$x = 1;
while ( $x <= 20 ) {
    $space=1;
    while ($space <= 20 - $x) {
    	echo "&nbsp";
        ++$space;
        echo "a";

    }
    echo "<br/>";
    $x++;
}
/////NE GO IZMISLIAM