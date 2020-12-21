<?php
/* По въведени координати на точка: "х" и "у" проверява дали точката е вътре в кръга К({0,0}2).*/

$x = 1.5;
$y = -1;
$x_circle = 0;
$y_circle = 0;
$r = 2;

if (($x - $x_circle) * ($x - $x_circle) + ($y - $y_circle) * ($y - $y_circle) <= $r * $r) {
	echo "true";
} else {
	echo "false";
}
