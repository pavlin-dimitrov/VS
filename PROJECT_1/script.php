<?php
if (!isset($_POST['colors'])) {

} else {
	if (empty($_POST['colors'])){
		$_SESSION['error_colors'] = 'Colors are required!';
		echo "<a href='session_destroy.php'>Enter some HEX colors. Please try again!</a>";
	}else{
		$replace_quot = str_replace('"', "", $_POST['colors']);  // Remove the quotes from the string;
		$remove_spaces = preg_replace('/\s+/', '', $replace_quot); // Remove spaces from the string;
		$hex_colors_arr = explode(',', $remove_spaces, pow(10, 4)); // Separate the string on elements of an array;	
		$count = count($hex_colors_arr);	
		$hex_splited = [];
	
			foreach ($hex_colors_arr as $key => $value) {  //For each element in the array
				$hex_colors_arr = str_split($value, 2);	   // Split the element by 2 char's		
				$hex_splited[] = $hex_colors_arr;		   // Enter the new elements in a new array
			}
		$resultNone = [];
		$resultMax = [];
			foreach ($hex_splited as $key => $value) {
  				if(count(array_count_values($value)) < 3 && hexdec($value[1]) == max(array_map('hexdec', $value))) {
   					$resultNone[] = $key;
   				} elseif (count(array_count_values($value)) != 1 && hexdec($value[1]) == max(array_map('hexdec', $value))) {
   					$resultMax[] = $key;
   				}
		 	}
		$count_resultMax = count($resultMax);

	echo "[";
		for ($m=0; $m < $count_resultMax; $m++) {
			echo $resultMax[$m] . ",";
		}
	echo "]";
	echo "<pre>";
	echo "<a href='session_destroy.php'>Check other colors!</a>";
	echo "</pre>";
	}
}