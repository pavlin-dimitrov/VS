<?php
if (!isset($_GET['name']) && !isset($_GET['education']) && !isset($_GET['profession'])) {
?>
<form action="" method="get">
	<p>First name, Second name, Last name</p>
	<input type="text" name="name">
	<p>Your education</p>
	<input type="text" name="education">
	<p>Your curent profession</p>
	<input type="text" name="profession">
	<input type="submit" name="submit" value="Create CV">
</form>
<?php
} else {
	if (!empty($_GET['name']) && !empty($_GET['education']) && !empty($_GET['profession'])) {

?>
	<p>CV of <?php echo $_GET['name'];?> </p>
	<table border="1">
	<tr>
		<td>Name</td>
		<td><?php echo $_GET['name'];?></td>
	</tr>
	<tr>
		<td>Education</td>
		<td><?php echo $_GET['education'];?></td>
	</tr>
	<tr>
		<td>Profession</td>
		<td><?php echo $_GET['profession'];?></td>
	</tr>
	</table>

<?php
	} else {
		echo "Fill up all the empty fields";
	}
}