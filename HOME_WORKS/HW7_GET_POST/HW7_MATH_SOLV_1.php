<?php
if (!isset($_GET['num1']) && !isset($_GET['num2'])) {
?>
<form action="" method="GET">
	<h1>Find if point is lying in circle with x=0, y=0 and r=2!</h1>
	<p>Write the x coordinates of the point.</p>
	<input type="number" name="num1">
	<p>Write the y coordinates of the point.</p>
	<input type="number" name="num2">
	<input type="submit" name="submit" value="Check">
</form>
<?php
} else {
	$x_circle = 0;
	$y_circle = 0;
	$r = 2;
	if (($_GET['num1'] - $x_circle) * ($_GET['num1'] - $x_circle) + ($_GET['num2'] - $y_circle) * ($_GET['num2'] - $y_circle) <= $r * $r) {
	echo "True - the point is in the circle!";
		} else {
	echo "False - the point is not in the circle!";
		}
}