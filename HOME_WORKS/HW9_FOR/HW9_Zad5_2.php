<?php
$i = 1;
$y = 1;
$a = 1;
$colspan = 9;
?>
<table border=1>
<?php
	for($i ;$i <= 10;$i++){
		echo "<tr>";	
		for($a; $a <= $y; $a++){
			echo "<td >$i * $a = " . $i*$a . "</td>";
		}
		if($colspan >= 1 ){
			echo "<td colspan='". $colspan ."'></td>";
		}
		$colspan--;
		$a = 1;
		$y++;
		echo "</tr>";
	}
?>
</table>