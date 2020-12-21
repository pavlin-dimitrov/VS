<?php
if (!isset($_POST['submit'])) {
?>

<form method="POST">
	<input type="submit" name="submit">
</form>

<?php
} else {
?>

<p>The form was sent</p>

<?php
}  ?>

//Когато се попълни формата и се натисне бутона, да се скрие формата.