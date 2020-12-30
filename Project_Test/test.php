<?php
/* Трансформирането на разделения по двойки HEX код в RGB код.
Печатане в таблица.
Следваща стъпка е търсене в масива ако за всеки i елемент на всеки под масив
key1 е по-голям от key0 и key2, то тогава принтирай ми индекса на масива. */

$hex_splited = [
		['F2','F0','A0'],    // 242, 240, 160
		['F1', 'FE', 'F1'],	//  241, 241, 241
		['A5', 'A8', 'A7'],//   165, 166, 167
	   ];

$arr_rgb = [];
$count2 = count($hex_splited);
//echo $count2;
for ($i=0; $i < $count2; $i++) { 
	$arr_rgb[$i] = [];
	for ($j=0; $j < 3; $j++) { 
		foreach ($hex_splited as $value) {
 			$val = hexdec($hex_splited[$i][$j]);
 			$arr_rgb[$i][$j] = $val;
 		}
 	} 
}	

/* За всеки ред от масива намери най-голямата стойност и върни нейния ключ, 
	ако този ключ е = на 1, то принтирай индекса на реда; */

$max = max($arr_rgb);
var_dump($max);
$key = array_search($max, $arr_rgb);
echo $key;

	echo "<table border='1'>";
for ($m=0; $m < $count2; $m++) {
	echo "<tr>";
	for ($k=0; $k < 3; $k++) { 
		echo "<td>";
		echo $arr_rgb[$m][$k];
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";