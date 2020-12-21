<?php
/* Програма, която проверява дали зададената комбинация от ден/месец/година е валидна.*/

$x = checkdate(11, 0, 2020);

if ($x == false  ) {
	echo "Not a valid date";
} elseif ($x == true) {
	echo "Valid date";
}