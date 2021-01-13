<?php

function printInput($type, $name, $value,$placeholder, $class, $id = ''): string {
    $input_form = "<input type=\"$type\" name=\"$name\" value=\"$value\" class=\"$class\" id=\"$id\" placeholder=\"$placeholder\"/>";
    return $input_form;
}
?>

<form action="" method="post">
	<?php

	echo printInput('text', 'names', '', 'Student Name Here...', 'form-control');
	echo "<br>";
	echo printInput('text', 'subject', '', 'Subject Here...', 'form-control');
	echo printInput('text', 'score1', '', 'Score Here...', 'form-control');
	echo "<br>";
	echo printInput('text', 'subject', '', 'Subject Here...', 'form-control');
	echo printInput('text', 'score1', '', 'Score Here...', 'form-control');
	echo "<br>";
	echo printInput('text', 'subject', '', 'Subject Here...', 'form-control');
	echo printInput('text', 'score1', '', 'Score Here...', 'form-control');
	echo "<br>";
	echo printInput('text', 'subject', '', 'Subject Here...', 'form-control');
	echo printInput('text', 'score1', '', 'Score Here...', 'form-control');
	echo "<br>";
	echo printInput('text', 'subject', '', 'Subject Here...', 'form-control');
	echo printInput('text', 'score1', '', 'Score Here...', 'form-control');
	echo "<br>";
	echo printInput('text', 'subject', '', 'Subject Here...', 'form-control');
	echo printInput('text', 'score1', '', 'Score Here...', 'form-control');
	echo "<br>";

	echo printInput('submit', 'submit', 'register', '', 'btn btn-default');
	?>
</form>