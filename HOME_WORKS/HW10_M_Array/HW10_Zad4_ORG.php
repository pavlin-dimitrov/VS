<?php
$n = [];
$m = 1;
$arr = [$n];
?>
<table border="1">
	<tbody>
<?php
for ($i=0; $i <= 3; $i++) { 
	echo "<tr>";
	$n[$i] = $m;
	if ($i >= 3) {
		for ($j=0; $j <=3 ; $j++) { 
		 	$arr[$i] = $n;
		 	foreach ($arr[$i] as $key => $value) {
		 		echo "<td>" . $value . "</td>";
		 	}
		 		echo "</tr>";	
		 }
	}	 	
}
?>
	</tbody>
</table>