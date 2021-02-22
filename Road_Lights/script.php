<?php
if (!isset($_POST['roadMap'])) {
} else {
	if (empty($_POST['roadMap'])){
		header('Location: road_face.php');
	}else{
		$arr = str_replace('"', "", preg_replace('/[\[(\s+)\]]/', '', explode('],', $_POST['roadMap'])));;
		$roadMap =[];
		for($i = 0; $i < count($arr); $i++){
			$roadMap[$i]= explode(',',$arr[$i]);
		}	
	$tot_time = 0;
	for ($i = 0; $i < count($roadMap); $i++){
	$time_update = 0;	
		if ($i-1 < 0){ // Разстояние от точка до точка, като отчитаме момента в който първата точка е 0.
			$point_diferance = 0;
		} else {
			$point_diferance = $roadMap[$i][0] - $roadMap[$i-1][0];
		}	
		if ($tot_time == 0){ // Натрупаното време, като отчитаме, че първото натрупано време е равно на първото изминато разстояние
			$tot_time = $roadMap[$i][0];
		} else {
			$tot_time = $tot_time;
		}
		$beta = (($tot_time+$point_diferance)/$roadMap[$i][1]);	// Коефициент на броя превключвания на светлината на светофара.
		if ($beta == 1){ // Ако коефициента ни е точно равен на 1
			if ($i-1 < 0){ // Ако коефициента ни е точно равен на едно, но сме в начална точка.
				$time_update = $roadMap[$i][0];
				$tot_time += $time_update;
			} else { // Ако коефициента е равен на едно, но не сме в начална точка.
				$time_update = $point_diferance + $roadMap[$i][1] ;
				$tot_time += $time_update;
			}	
		} elseif ($beta == 2){ // Ако коефициента е равен на точно 2.
			$time_update = $point_diferance;
			$tot_time += $time_update;
		} elseif ( ceil($beta) % 2 == 0 && $beta != 2){ // Ако закръгления нагоре коефициента е четно число, но коефициента не е 2.
			$gama = ceil($beta) * $roadMap[$i][1];
			if($beta == ceil($beta)) { // Проверяваме дали коефициента съвпада със закръгления нагоре коефициент, тогава имаме кръгло четно число, което ни поставя в зелен светофар.
				$time_update = $point_diferance;
				$tot_time += $time_update;
			} else {		
				if( $i-1 < 0){ // Ако не е кръгло нечетно, проверяваме дали сме в началото на пътя.
					$tot_time = $tot_time + $point_diferance;
					$time_update = $gama-$tot_time;
					$tot_time += $time_update;
				} else { // Ако не е кръгло нечетно число, и не сме в началото на пътя.
					$tot_time = $tot_time + $point_diferance;
					$time_update = ($gama - $tot_time);
					$tot_time += $time_update;
				}
			}			
		} elseif ( ceil($beta) % 2 != 0 && $beta != 1){ // Ако коефициента е нечетно число.
			if($beta == ceil($beta)){ // Проверяване дали е кръгло четно число, това ни поставя в точка където червеното тъкмо светва.
				$time_update = $point_diferance + $roadMap[$i][1];
				$tot_time += $time_update;
				} else { // Ако коефициента не е кръгло четно число.
					if ($i-1 < 0){ // Проверяваме дали това условие се случва в началото на пътя.
						$time_update = 0;
						$tot_time += $time_update;
					} else { // Ако не е в началото на пътя, то изпълняваме това условие.
						$time_update = $point_diferance;
						$tot_time += $time_update;
					}
				}
			}

		}
	}
}
echo "    result:  ";
echo $tot_time;