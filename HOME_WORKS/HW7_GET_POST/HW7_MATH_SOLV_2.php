<?php
if (!isset($_GET['kg']) && !isset($_GET['activity'])) {
?>
<form action="" method="get">
	<h1>Calories Calculator</h1>
	<p>Your weight in kg:</p>
	<input type="number" name="kg">
	<p>Activity index! 13 - Not really active / 15 - Active</p>
	<input type="number" name="activity">
	<input type="submit" name="submit" value="Calculate">
</form>
<?php
} else {
	$index = 10;
	$day_cal = ($_GET['activity'] * $_GET['kg']) * $index;
	echo "Your daily amount of calories is: " . $day_cal . ", based on your data!";
}