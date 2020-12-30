<?php 
// Primer 1 - ISSET()
/*$arr = [];
if (isset($arr['demo'])) {
	echo "is set";
} else {
	echo "is not set ";
}*/

//Primer 2 - EMPTY()
// Кои стойности за езика се считат за празен масив: 0; false = 0, значи също не се счита за празно място.' ' (празно място не е празен масив);
/*$arr = [''];
if (empty($arr)) {
	echo "is empty";
} else {
	echo "not empty";
}*/
 // trim функцията премахва празните места

$arr = ['demo' =>'10'];
//var_dump(isset($arr['demo']));
if (isset($arr['demo'])) {
	if (empty($arr['demo'])) {
		echo "set and empty";
	} else {
	echo "set and NOT empty";
	} 
    } else {
    	echo "NOT set";
    }   

?>
