<?php
//Zad. 19
// 
$rows = 10;
$cols = 2;
$sum = 0;
?>
<table border="1">
<?php
for ($i=0; $i < $rows ;) { 
	$num = rand(0, 100);
	if ($num % 2 == 0) {
		echo "<tr>";
			echo "<td>". $num ."</td>";
			$rounded = round(sqrt( $num),2);
			echo "<td>". $rounded ."</td>";
			$i++;
			$sum += $rounded;
		echo "</tr>";		
	}
}
?>
			<tr>
					<td>Sum of numbers SQR</td>
					<td><?php echo $sum; ?></td>
			</tr>
</table>