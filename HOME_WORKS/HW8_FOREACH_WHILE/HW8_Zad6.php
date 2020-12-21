<?php
// Програма, която пресмята n!*k!/(n-k)! за дадени n и k, различни от нула. Използвайте форма за въвеждане на числата n и k.
if (!isset($_GET['n']) && !isset($_GET['k'])) {
?>
			<form action="" method="get">
				<h1>FACTORIAL CALCULATOR</h1>
				<p>Type "n!" value:</p>
				<input type="text" name="n">
				<p>Type "k!" value:</p>
				<input type="text" name="k">
				<input type="submit" name="submit" value="Calculate!">
			</form>
<?php
} else {

$f_n = 1;
$f_k = 1;
$f_nkk = 1; 

		if (is_numeric($_GET['n']) && is_numeric($_GET['k'])) {
				$nk = ($_GET['n'] - $_GET['k']);
				$nkk = $nk;
			if (!empty($_GET['n']) && !empty($_GET['k']) && $_GET['n'] > 0 && $_GET['k'] > 0 && $nkk > 0) {
				while ($_GET['n'] > 0 ) {
		    		$f_n = ($f_n * $_GET['n']); 
					$_GET['n']--;
				}
				while ($_GET['k'] > 0 ) {
		    		$f_k = ($f_k * $_GET['k']);  
					$_GET['k']--;
				}
				while ($nkk > 0 ) {
			    	$f_nkk = ($f_nkk * $nkk); 
					$nkk--;		
				}
					echo ($f_n*$f_k) / $f_nkk;
			} else {
				echo "Is empty or is less then 0";
			}
		} else {
				echo "Is not number";
		}
}