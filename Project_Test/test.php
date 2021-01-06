<?php
/* Трансформирането на разделения по двойки HEX код в RGB код.
Печатане в таблица.
Следваща стъпка е търсене в масива ако за всеки i елемент на всеки под масив
key1 е по-голям от key0 и key2, то тогава принтирай ми индекса на масива. */
$hex_splited = [
		['00','00','00'],    // 242, 240, 160
		['10', '11', '10'],	//  241, 241, 241
		['F0', '1A', 'C3'],//   165, 166, 167
		['0F', 'FE', 'F4'],
	   ];


$arr_rgb = [];
$count2 = count($hex_splited);
$max = max(array_map("max", $hex_splited));
$key = 0;
for ($i=0; $i < $count2; $i++) { 
	$inn_count = count($hex_splited[$i]);
	for ($j=0; $j < $inn_count; $j++) { 
 			$val = hexdec($hex_splited[$i][$j]);
 			$arr_rgb[$i][$j] = $val;
 			if ($max == $hex_splited[$i][$j]) {
 				$key = $i;
 			}
 	}
}
/* За всеки ред от масива намери най-голямата стойност и върни нейния ключ, 
	ако този ключ е = на 1, то принтирай индекса на реда; */
//$max = max(array_map("max", $arr_rgb));
var_dump($max);
//$key = array_search($max, $hex_splited);
echo "<pre>";
echo "array key is: " . $key;
echo "</pre>";

	echo "<table border='1'>";
for ($m=0; $m < $count2; $m++) {
	echo "<tr>";
	for ($k=0; $k < $inn_count; $k++) { 
		echo "<td>";
		echo $arr_rgb[$m][$k];
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";