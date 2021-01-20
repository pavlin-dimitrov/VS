<?php

function print_num( $str ){
$arr = explode(' ', $str);

echo "<table border=1>";
	for ($i=0; $i < count($arr) ; $i++) { 
		echo "<tr>";
			echo "<td>$arr[$i]</td>";
			$len = strlen($arr[$i]);
			$current_str = $arr[$i];
			$sum = 0;
			if (!is_numeric($current_str)) {
				echo "<td>Ne moga da sumiram</td>";
				} else {
					for ($j=0; $j < $len; $j++) { 
					$sum += $current_str[$j];

					}
					echo "<td>$sum</td>";
				}
				echo "</tr>";
			}
echo "</table>";
}

//$input = '1 25 56 9656 258 7854 21';
$input = '1 25 56 aaa 258 7854 21';

print_num($input);