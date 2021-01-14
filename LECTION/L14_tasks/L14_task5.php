<?php
$n = 5;
for ($i=0; $i < $n; $i++) { 
	for ($j=1; $j < $n-$i ; $j++) { 
		echo "_";
	}
	for ($k=0; $k < (2*$i+1); $k++) { 
		echo "*";
	}
	for ($m=1; $m < $n-$i ; $m++) { 
		echo "_";
	}
	echo "<br>";
}