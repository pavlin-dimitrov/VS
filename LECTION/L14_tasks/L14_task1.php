<?php
$a = 10;
$b = 63;
$c = 15;
function triangle ($a, $b, $c){
    if (($a+$c<$b)||($a+$b<$c)||($b+$c<$a)) {
        echo "Niama takuv triugulnikn";
    } else {
        if (($a==$b)&&($a==$c)&&($b==$c)) {
            echo "Triugulnikut e ravnostranen";
        } else if (($a==$b)||($b==$c)||($a==$c)) {
            echo "Triugulnikut e ravnobedren";
        } else {
            echo "Triugulnikut e raznostranen";
        }
    }
}
triangle($a, $b, $c);