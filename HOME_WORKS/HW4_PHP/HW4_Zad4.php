<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="HW4_Zad4.php" method = "post">
		<input type="number" name="month">
		<input type="submit">
	</form>


<?php

$months = array( 1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "Novembre", 12 => "December");
	echo $months[$_POST["month"]];

	?>


	
</body>
</html>



