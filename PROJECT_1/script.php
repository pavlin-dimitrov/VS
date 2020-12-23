
<?php
// $color = "E3F5B7";
// 		$value = str_split($color, 2);
// 		$r = hexdec($value[0]);
// 		$g = hexdec($value[1]);
// 		$b = hexdec($value[2]);
// if ($g > $r && $g > $b) {
// 	echo $color . "<br>";
// } else {
// 	echo 0;
// }


if (!isset($_GET['colors'])) {
	?>
<form action="" method="get">
	<p>HEX Colors here:</p>
	<input type="colors" name="colors">
	<p>CHECH IF ANY</p>
	<input type="submit" name="submit" value="CHECK">
</form>
<?php
} else {
	$replace_quot = str_replace('"', "", $_GET['colors']);  // Remove the quotes from the string;
	$remove_spaces = preg_replace('/\s+/', '', $replace_quot); // Remove spaces from the string;
	$hex_colors_arr = explode(',', $remove_spaces, pow(10, 4)); // Separate the string on elements of an array;
	$count = count($hex_colors_arr);
	$hex_splited = [];

		foreach ($hex_colors_arr as $key => $value) {  //За всеки елемент в масива
		$hex_colors_arr = str_split($value, 2);		   // Раздели елемента на двойки
			
			$hex_splited[] = $hex_colors_arr;
				echo "<pre>";
				var_dump($hex_splited);
				echo "</pre>";
		}

}
// print_r($hex_splited);