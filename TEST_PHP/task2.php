<?php
$city = [
['name' => 'Vratsa', 'Y' => 1234, 'P' => 50000, 'NF' => 20, 'SH' => 4, 'CA' => 200, 'YI' => 1980,],
['name' => 'Pleven', 'Y' => 1234, 'P' => 60000, 'NF' => 25, 'SH' => 5, 'CA' => 200, 'YI' => 890,],
['name' => 'Veliko Tarnovo','Y' => 1234, 'P' => 70000, 'NF' => 30, 'SH' => 6, 'CA' => 250, 'YI' => 950,],
['name' => 'Plovdiv', 'Y' => 1234, 'P' =>  400000, 'NF' => 60, 'SH' => 9, 'CA' => 480, 'YI' => 1450,],
['name' => 'Sofia', 'Y' => 1234, 'P' => 2000000, 'NF' => 290, 'SH' => 20, 'CA' => 1980, 'YI' => 2000,],
];
// TIG = (((NF+$SH)/$CA)*100)*P/CA)*(2019 - $Y)

$count = count($city);
$avg_tig = 0;
for ($i=0; $i < $count; $i++) { 
	$TIG = (((($city[$i]['NF']+$city[$i]['SH'])/$city[$i]['CA'])*100)*$city[$i]['P']/$city[$i]['CA'])*(2019 - $city[$i]['Y']);
	$city[$i]['TIG'] = $TIG/1000000; // Малко си поиграх за да се вижда по-готино индекса с деленето на милион :)
	$avg_tig += ($TIG/$count)/1000000; 
}
$min_tig = $city[0]['TIG'];
$min_tig_ind = 0;

for ($j=0; $j < $count; $j++) { 
	if ($min_tig > $city[$j]['TIG']) {
		$min_tig = $city[$j]['TIG'];
		$min_tig_ind = $j;
	}
}
?>

<table border="1">
	<thead>
		<tr>
			<th>City Name</th>
			<th>Year</th>
			<th>Population</th>
			<th>Factory</th>
			<th>Soprts hall</th>
			<th>Culture events</th>
			<th>Yearly income</th>
			<th>TIG Index</th>
		</tr>
	</thead>
	<tbody>
		<?php for($k = 0; $k < $count; $k++) { ?>
			<tr>
				<td><?= $city[$k]['name']; ?></td>
				<td><?= $city[$k]['Y']; ?></td>
				<td><?= $city[$k]['P']; ?></td>
				<td><?= $city[$k]['NF']; ?></td>
				<td><?= $city[$k]['SH']; ?></td>
				<td><?= $city[$k]['CA']; ?></td>
				<td><?= $city[$k]['YI']; ?></td>
				<td><?= round($city[$k]['TIG'], 0); ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php

echo $city[$min_tig_ind]['name'] . ' has the lowest TIG Index  = ' . round($city[$min_tig_ind]['TIG'], 0);
echo "<br>";
echo 'Average TIG index is: ' . round($avg_tig, 0);