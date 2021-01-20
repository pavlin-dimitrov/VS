<?php

$junk_food = [
['name' => 'Pavlin', 'JF' => 52, 'D' => 60, 'C' => 300, 'P' => 150 ],
['name' => 'Pavlin1', 'JF' => 10, 'D' => 60, 'C' => 200, 'P' => 300 ],
['name' => 'Pavlin2', 'JF' => 15, 'D' => 60, 'C' => 100, 'P' => 150 ],
['name' => 'Pavlin3', 'JF' => 25, 'D' => 60, 'C' => 30, 'P' => 15 ],
['name' => 'Pavlin4', 'JF' => 56, 'D' => 60, 'C' => 300, 'P' => 100 ],

];

$count = count($junk_food);
$average_r = 0;

for ($i=0; $i < $count ; $i++) { 
	$r = (($junk_food[$i]['JF']+$junk_food[$i]['D'])*2 + $junk_food[$i]['C']*2)/$junk_food[$i]['P'];
	$junk_food[$i]['R'] = $r;
	$average_r += $r;
}

$average_r = $average_r/$count;

$min_r = $junk_food[0]['R'];
$min_ind = 0;

for ($j=0; $j < $count; $j++) { 
	if ($min_r > $junk_food[$j]['R'] ) {
		$min_r = $junk_food[$j]['R'];
		$min_ind = $j;
	}
}

?>

<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>JF</th>
			<th>Drinks</th>
			<th>Computer hours</th>
			<th>P</th>
			<th>R</th>
		</tr>
	</thead>
	<tbody>
		<?php for($k = 0; $k < $count; $k++) { ?>
			<tr>
				<td><?= $junk_food[$k]['name']; ?></td>
				<td><?= $junk_food[$k]['JF']; ?></td>
				<td><?= $junk_food[$k]['D']; ?></td>
				<td><?= $junk_food[$k]['C']; ?></td>
				<td><?= $junk_food[$k]['P']; ?></td>
				<td><?= $junk_food[$k]['R']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php

echo $junk_food[$min_ind]['name'] . 'has the lowest Index R = ' . $junk_food[$min_ind]['R'];