<?php
function printInput($type, $name, $value,$placeholder, $class, $id = ''): string {
    $input_form = "<input type=\"$type\" name=\"$name\" value=\"$value\" class=\"$class\" id=\"$id\" placeholder=\"$placeholder\"/>";
    return $input_form;
}
?>

<form action="" method="post">
	<?php

	echo printInput('text', 'first_name', '', 'First Name Here...', 'form-control');
	echo printInput('text', 'last_name', '', 'Last Name Here...', 'form-control');
	echo printInput('submit', 'submit', 'register', '', 'btn btn-default');
	?>
</form>