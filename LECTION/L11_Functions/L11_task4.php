<?php

function print_smth($tag, $str, $color = 'yellow'){
	echo "<$tag style='color:".$color."'>";
	echo "$str";
	echo "</$tag>";
}


print_smth('h1', 'Something', 'red');
print_smth('h2', 'Something', 'blue');
print_smth('h3', 'Something', 'pink');

$t = 'h4';
$c = 'pink';
print_smth($t, 'Something');
