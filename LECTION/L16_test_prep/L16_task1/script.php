<?php

if (!empty($_POST['fuel_consumption'])) {
	$fuel = $_POST['fuel_consumption'];
	$condition = $_POST['conditions'];

	switch ($condition) {
		case 'snow':
			echo $fuel * 1.05;
			break;
		case 'trafic':
			echo $fuel * 1.5;
			break;
		case 'coplications':
			echo $fuel * 1.2;
			break;
		case 'highway':
			echo $fuel * 0.9;
			break;	
	}
} else {
	echo "Please enter fuel";
}