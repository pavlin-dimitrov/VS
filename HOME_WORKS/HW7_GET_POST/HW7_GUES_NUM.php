<?php
if (!isset($_GET['number'])) {
?>
<form action="" method="get">
	<p>Guest the number</p>
	<input type="number" name="number">
	<p>Press the button</p>
	<input type="submit" name="submit" value="GUESS">
</form>
<?php
} else {
	$number = 5;
	if ($number > $_GET['number']) {
		echo "The number is bigger then your gues!";
	} elseif ($number < $_GET['number']) {
		echo "The number is smaller then your gues!";
	} else {
		echo "Thisi is the correct number";
	}
}