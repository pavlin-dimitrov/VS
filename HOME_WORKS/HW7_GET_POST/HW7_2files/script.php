<?php
if(isset($_POST['myName']) && isset($_POST['city'])){
	if(!empty($_POST['myName']) && !empty($_POST['city'])){
		echo 'My name is: ' . $_POST['myName'] . ' and my favorite city is: ' . $_POST['city'];
		echo '</br>';
		echo '<a href="form.php">back</a>';
	} else {
		echo 'empty fields';
	}
}
