<?php

function print_smth($tag, $str){
	echo "<$tag>";
	echo "$str";
	echo "</$tag>";
}


print_smth('h1', 'Something');
print_smth('h2', 'Something');
print_smth('h3', 'Something');

$t = 'h4';
print_smth($t, 'Something');
