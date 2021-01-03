<?php

function print_hello_world($tag){
	echo "<$tag>";
	echo "Hello World!";
	echo "</$tag>";
}


print_hello_world('h1');
print_hello_world('h2');
print_hello_world('h3');

$t = 'h4';
print_hello_world($t);
