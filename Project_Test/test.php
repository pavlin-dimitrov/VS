<?php
$hex_splited = [
		['00','00','00'], 
		['10', '11', '10'],	
		['F0', '1A', 'C3'],
		['0F', 'FE', 'F4'],
	   ];
$resultMax = [];
foreach ($hex_splited as $key => $value) {
  	if(count(array_count_values($value)) != 1 && hexdec($value[1]) == max(array_map('hexdec', $value))) {
   		$resultMax[] = $key;
   	}
 }
$count_resultMax = count($resultMax);

echo "[";
	for ($m=0; $m < $count_resultMax; $m++) {
		echo $resultMax[$m] . ",";
	}
echo "]";