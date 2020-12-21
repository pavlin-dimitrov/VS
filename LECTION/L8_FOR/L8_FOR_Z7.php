<?php
//zad 18

//Da se otpe4ata tablica s $m reda i $n koloni kato izpolzvate FOR. V vsqko pole pi6em stojnostite (red kolona). $m i $n ...

$rows = 15;
$cols = 6;
?>
<table border="1">
<?php
for ($i=1; $i <= $rows ; $i++) { 
	echo "<tr>";
		for ($j=1; $j<=$cols; $j++) { 
			echo "<td>$i - $j</td>";
		}
	echo "</tr>";
}

?>
</table>