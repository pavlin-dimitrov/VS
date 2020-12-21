<?php
	if (!isset($_POST['submit'])) {
?>
<form action="" method="post">
	<input type="text" name="weekday">
	<input type="submit" name="submit" value="See poem">
</form>
<?php

} else {
$a ='Monday'; 
$b ='Tuesday'; 
$c ='Wednesday'; 
$d ='Thursday'; 
$e ='Friday';
$f ='Saturday';
	if ($a == $_POST['weekday']) {
		echo "Laugh on Monday, laugh for danger.";
	} elseif ($b == $_POST['weekday']) {
		echo "Laugh on Tuesday, kiss a stranger.";
	} elseif ($c == $_POST['weekday']) {
		echo "Laugh on Wednesday, laugh for a letter.";
	} elseif ($d == $_POST['weekday']) {
		echo "Laugh on Thursday, something better.";
	} elseif ($e == $_POST['weekday']) {
		echo "Laugh on Friday, laugh for sorrow.";
	} elseif ($f == $_POST['weekday']) {
		echo "Laugh on Saturday, joy tomorrow.";
	} else {
		echo "Not a valid day.";
	}
} 

?>