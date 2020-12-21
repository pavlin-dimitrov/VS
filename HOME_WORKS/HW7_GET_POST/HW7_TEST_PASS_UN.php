
<?php
	if (!isset($_POST['submit'])) {
?>
<form action="" method="post">
	<p>Usarname:</p>
	<input type="text" name="usarname">
	<p>Password</p>
	<input type="password" name="password">
	<input type="submit" name="submit" value="Check">
</form>
<?php
	$usarname = "pavlin";
	$password = "12345";
} else {

	if ($usarname == $_POST["usarname"] && $password == $_POST["password"]) {
		echo "Welcome back:" . $usarname;
	} else {
		if ($usarname !== $_POST["usarname"] || $password !== $_POST["password"]) {
			echo "Wrong usarname or password! Try again!";
		} else {
			echo "Wrong usarname or password! Try again!";
		}
	}
}
?>