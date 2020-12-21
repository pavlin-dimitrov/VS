<?php
$MN = [
		[
		1,1,1,1,	
	],
		[
		1,1,1,1, 	
	],
		[
		1,1,1,1,
	],
		[
		1,1,1,1,	
	],
];
$count = count($MN);
?>
<table border="1">
	<tbody>	
<?php
for ($i=0; $i < $count ; $i++) { 
		echo "<tr>";
	foreach ($MN[$i] as $key => $value) {
		echo "<td>" . $key . ", " . $value . "</td>";
	}
	echo "</tr>";
}
?>
	</tbody>
</table>