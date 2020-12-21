<?php
$val = 1;
$rows = 3;
$cols = 3;
?>
<table border="1">
<?php
for ($i=0; $i <= $rows ; $i++) { 
	echo "<tr>";
		for ($j=0; $j<=$cols; $j++) { 
			echo "<td>Index:  $j Value: $val</td>";
		}
	echo "</tr>";
}

?>
</table>