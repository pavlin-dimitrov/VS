<?php
$arr = ['g','g','g'];
$a = ['helth' => 5,'attack' => 6,'resistance' => 2,];
$b = ['helth' => 6,'attack' => 8,'resistance' => 2,];
$g = ['helth' => 8,'attack' => 6,'resistance' => 5,];
$master = ['helth' => 18, 'attack' => 6, 'resistance' =>  5,];
$count = count($arr);
$fighters_on_ring = [];

 for($i = 0; $i < $count;$i++){
	$fighters_on_ring[$i] = [];
		for ($j = 0; $j <= 3;$j++){
			if($arr[$i] == 'a'){
				$fighters_on_ring[$i] = $a;
			} elseif ($arr[$i] == 'b') {
				$fighters_on_ring[$i] = $b;
			} elseif ($arr[$i] == 'g'){
				$fighters_on_ring[$i] = $g;
			}
		}
	}

echo"<pre>";
	print_r($fighters_on_ring);
echo"</pre>";
$master_hits = 0;
$fighter_hits = 0;
$dead_fighters = 0;
$mhd = 0; // Masters Hits Damage, will refresh in the next game, until then it's will go down.
$total_md = 0; // total master damage for all fighters on ring
$total_fd = 0; // total fighter damage for all fighters in the fight with the master


for ($i = 0; $i < count($fighters_on_ring); $i++){

 $fhd = 0; // Fighters Hits Damage, counter start from 0 for each new fighter
	while ($master['helth'] > 0 && $fighters_on_ring[$i]['helth'] > 0){
		$fighter_strike = ($master['helth'] + $master['resistance']) - $fighters_on_ring[$i]['attack'];
				$master['helth'] = $fighter_strike;
				$fighter_hits += 1;
				$fhd = $fighters_on_ring[$i]['attack'] - $master['resistance'];
				$total_fd += $fhd;
		if ($master['helth'] <= 0){
		break;
		} else {
		$master_strike =($fighters_on_ring[$i]['helth'] + $fighters_on_ring[$i]['resistance']) - $master['attack'];
				$fighters_on_ring[$i]['helth'] = $master_strike;
				$master_hits +=1;
				$mhd = $master['attack'] - $fighters_on_ring[$i]['resistance'];
				$total_md += $mhd;
				if ($fighters_on_ring[$i]['helth'] <= 0 ){
					$dead_fighters++;
				}
		}
	} 
}
$winer = '';
if ($master['helth'] > 0 ) {
	$winer = 'Master';
	} else {
		$winer = 'Fighters';
	}
$avg_fhd = $total_fd / $fighter_hits;
$avg_mhd = $total_md / $master_hits;
$alive_fighters = count($fighters_on_ring) - $dead_fighters;
	
echo"<pre>";
print_r($master);
echo"</pre>";

echo"<pre>";
print_r($fighters_on_ring);
echo"</pre>";

echo"<pre>";
print_r($winer);
echo"</pre>";

echo"<pre>";
print_r($dead_fighters);
echo"</pre>";

echo"<pre>";
print_r($alive_fighters);
echo"</pre>";

echo"<pre>";
print_r($master['helth']);
echo"</pre>";

echo"<pre>";
print_r($fighter_hits);
echo"</pre>";

echo"<pre>";
print_r($master_hits);
echo"</pre>";

echo"<pre>";
print_r($avg_fhd);
echo"</pre>";

echo"<pre>";
print_r($avg_mhd);
echo"</pre>";