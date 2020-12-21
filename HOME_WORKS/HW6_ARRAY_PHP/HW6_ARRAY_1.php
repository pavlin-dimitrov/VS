<?php
/* 1. А. масив с три имена, възраст, професия.
   2. А. масив с имена и телефонни номера.
   3. А. масив с градове и телефонни кодове (5 елемента);
   4. Отпечатайте инфото от А.масиви 1,2, и 3:
   		- Неномериран списък;
   		- Номериран списък;
   		- Таблица.*/


 $conn = [
 			"name" => "Павлин", 
 			"second_name" => "Красимиров", 
 			"last_name" => "Димитров", 
 			"age" => "31", 
 			"profession" => "Quality Manager",
 		];

 $phone = [
 			"name1" => "Pavlin Dimitrov", "number1" => "0888 81 82 83",
 			"name2" => "Ivan Ivanov", "number2" => "0878 98 89 87",
 			"name3" => "Petar Ivanchev", "number3" => "0889 99 99 99",
 		  ];

 $p_codes = [
 				"city1" => "Sofia", "phone_code1" => "02", 
 				"city2" => "Vratsa", "phone_code2" =>  "092", 
 				"city3" => "Gabrovo", "phone_code3" => "022",
 				"city4" => "Veliko Tarnovo", "phone_code4" => "029",
 				"city5" => "Plovdiv", "phone_code5" => "011",
 			];

 ?>

 <ul>
 	<li><?php echo $conn["name"];?></li>
 	<li><?php echo $conn["second_name"];?></li>
 	<li><?php echo $conn["last_name"];?></li>
 	<li><?php echo $conn["age"];?></li>
 	<li><?php echo $conn["profession"];?></li>
 </ul>
<br>

<ol>
	<li><?php echo $phone["name1"]; echo " - ";  echo $phone["number1"];?></li>
	<li><?php echo $phone["name2"]; echo " - ";  echo $phone["number2"];?></li>
	<li><?php echo $phone["name3"]; echo " - ";  echo $phone["number3"];?></li>
</ol>
<br>

<table border="1">
	<tr>
		<td><?php echo $p_codes["city1"];?></td>
		<td><?php echo $p_codes["phone_code1"];?></td>
	</tr>
	<tr>
		<td><?php echo $p_codes["city2"];?></td>
		<td><?php echo $p_codes["phone_code2"];?></td>
	</tr>
	<tr>
		<td><?php echo $p_codes["city3"];?></td>
		<td><?php echo $p_codes["phone_code3"];?></td>
	</tr>
	<tr>
		<td><?php echo $p_codes["city4"];?></td>
		<td><?php echo $p_codes["phone_code4"];?></td>
	</tr>
	<tr>
		<td><?php echo $p_codes["city5"];?></td>
		<td><?php echo $p_codes["phone_code5"];?></td>
	</tr>
</table>