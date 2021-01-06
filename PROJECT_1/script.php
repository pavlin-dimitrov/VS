<?php
if (!isset($_GET['colors'])) {

} else {
	$replace_quot = str_replace('"', "", $_GET['colors']);  // Remove the quotes from the string;
	$remove_spaces = preg_replace('/\s+/', '', $replace_quot); // Remove spaces from the string;
	$hex_colors_arr = explode(',', $remove_spaces, pow(10, 4)); // Separate the string on elements of an array;	
	$count = count($hex_colors_arr);	
	$hex_splited = [];
	$arr_rgb = [];
	
		foreach ($hex_colors_arr as $key => $value) {  //За всеки елемент в масива
			$hex_colors_arr = str_split($value, 2);		   // Раздели елемента на двойки		
			$hex_splited[] = $hex_colors_arr;
		}
		$count2 = count($hex_splited);
		for ($i=0; $i < $count2; $i++) { 
			for ($j=0; $j < 3; $j++) { 
	 				$val = hexdec($hex_splited[$i][$j]);
	 				$arr_rgb[$i][$j] = $val;
	 		} 
		}	
}
$max = max($arr_rgb);
var_dump($max);
$key = array_search($max, $arr_rgb);
echo $key;
echo "<table border='1'>";
for ($m=0; $m < $count; $m++) {
	echo "<tr>";
	for ($k=0; $k < 3; $k++) { 
		echo "<td>";
		echo $arr_rgb[$m][$k];
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";