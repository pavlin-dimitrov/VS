<?php
include 'functions.php';
if (!isset($_POST['colors'])) {
} else {
	if (empty($_POST['colors'])){
		header('Location: index.html');
	}else{
		$hex_colors_arr = str_replace('"', "", preg_replace('/[\[(\s+)\]]/', '', explode(',', $_POST['colors'], pow(10, 4))));
		$hex_splited = []; 									//empty array for the splited arrayof hex color strings
			foreach ($hex_colors_arr as $key => $value) {  //For each element in the array
				$hex_colors_arr = str_split($value, 2);	   // Split the element by 2 char's		
				$hex_splited[] = $hex_colors_arr;		   // Enter the new elements in a new array
			}
		$resultMax = [];
			foreach ($hex_splited as $key => $value) {
				if (hexdec($value[1]) > hexdec($value[0]) && hexdec($value[1]) > hexdec($value[2]) ) {
					$resultMax[] = $key;
				}
		 	}
		echo print_result($resultMax);
	}
}