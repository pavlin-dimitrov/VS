<?php
if (!isset($_POST['fighters_on_ring']) && !isset($_POST['master_skill'])) {
	echo "Enter Master skills and Seq. of Fighters!";
} else {
	if (empty($_POST['fighters_on_ring']) || empty($_POST['master_skill'])) {
		header('Location: face.html');
		die();
} else {

	$arr_f = str_replace('"', "", preg_replace('/[\[(\s+)\]]/', '', explode(',', $_POST['fighters_on_ring']))); //Cut what we don't need from the data.
	$arr_m = str_replace('"', "", preg_replace('/[\[(\s+)\]]/', '', explode(',', $_POST['master_skill'])));


//////////////////////////////////////////////////////////////////
	$new_key = [0 => 'health', 1 => 'attack', 2 => 'resistance'];// The exploded 'master_skill' array is with indexes 0,1,2.
	$master = [];                                               // Here we change all of them to mach with 'health', 'attack', 'resistance'
		foreach ($arr_m as $key => $value) {                    //
			$master[$new_key[$key]] = $value;				    //
		}														//
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
	$a = ['health' => 5,'attack' => 6,'resistance' => 2,];		// 3 different dipendent arrays with the fighters skills
	$b = ['health' => 6,'attack' => 8,'resistance' => 2,];		//
	$g = ['health' => 8,'attack' => 6,'resistance' => 5,];		//
//////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
$count = count($arr_f);										   // Applaing skills for each fighter in the 
$fighters_on_ring = [];										   // 'fighters_on_ring' array.
															   //
 for($i = 0; $i < $count;$i++){								   //
	$fighters_on_ring[$i] = [];								   //
		for ($j = 0; $j <= 3;$j++){							   //
			if($arr_f[$i] == 'a'){                             //
				$fighters_on_ring[$i] = $a;                    //
			} elseif ($arr_f[$i] == 'b') {                     //
				$fighters_on_ring[$i] = $b;                    //
			} elseif ($arr_f[$i] == 'g'){                      //
				$fighters_on_ring[$i] = $g;                    //
			}                                                  //
		}                                                      //
	}                                                          //
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////	
$master_hits = 0;											   // Here we will count the hits of the master
$fighter_hits = 0;                                             // Here we will count the hits of the fighters
$dead_fighters = 0;                                            // Here we will count the number of the dead fighters
$mhd = 0; 													   // Masters Hits Damage, will refresh in the next game, until then it's will go down.
$total_md = 0; 												   // total master damage for all fighters on ring
$total_fd = 0; 												   // total fighter damage for all fighters in the fight with the master
/////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
for ($i = 0; $i < count($fighters_on_ring); $i++){																		 // Main loops
                                                                                                                         //
 $fhd = 0; // Fighters Hits Damage, counter start from 0 for each new fighter 											 //
                                            																			 // 
	while ($master['health'] > 0 && $fighters_on_ring[$i]['health'] > 0){   										     //
	                                               																		 //
		$fighter_strike = ($master['health'] + $master['resistance']) - $fighters_on_ring[$i]['attack'];                 //
				$master['health'] = $fighter_strike;                                                                     //
				$fighter_hits += 1;                                                                                      //
				$fhd = $fighters_on_ring[$i]['attack'] - $master['resistance'];                                          //
				$total_fd += $fhd;																						 //
				                                                                                       					 //
		if ($master['health'] <= 0){                                                                                     //
		break;                                                                                                           //
		} else { 																										 //
		                                                                                                        		 //
		$master_strike =($fighters_on_ring[$i]['health'] + $fighters_on_ring[$i]['resistance']) - $master['attack'];     //
				$fighters_on_ring[$i]['health'] = $master_strike;                                                        //
				$master_hits +=1;                                                                                        //
				$mhd = $master['attack'] - $fighters_on_ring[$i]['resistance'];                                          //
				$total_md += $mhd;                                                                                       //
				if ($fighters_on_ring[$i]['health'] <= 0 ){                                                              //
					$dead_fighters++;                                                                                    //
				}                                                                                                        //
		}                                                                                                                //
	}                                                                                                                    //
}                                                                                                                        //
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
$winer = '';												   // Find the winer.
if ($master['health'] > 0 ) {								   //
	$winer = 'Master';                                         //
	} else {                                                   // 
		$winer = 'Fighters';                                   //
	}                                                          //
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////	
$avg_fhd = $total_fd / $fighter_hits;                          // Average demage from the fighters hits
$avg_mhd = $total_md / $master_hits;                           // Average demage from the masters hits
$alive_fighters = count($fighters_on_ring) - $dead_fighters;   // How many fighters are still alive after the fight
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
		$master_health = 0;                                    // Taking the masters health points if they are less then 0, make them 0.
		if ($master['health'] < 0) {                           // If they are higher then 0, use the actual number.
			$master_health = 0;                                //
		} else {                                               //
			$master_health = $master['health'];                //
		}                                                      //
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
echo '["'.($winer).'",'."<br>",		   						   // Print the fight statistic.
'"'.($dead_fighters).'",' . "<br>",                            //
'"'.($alive_fighters).'",' . "<br>",                           //
'"'.($master_health).'",'. "<br>",                             //
'"'.($fighter_hits).'",' . "<br>",                             //
'"'.($master_hits).'",' . "<br>",                              //
'"'.(round($avg_fhd, 2)).'",'. "<br>",                         //
'"'.(round($avg_mhd,2)).'"]';                                  //
/////////////////////////////////////////////////////////////////
	}
}