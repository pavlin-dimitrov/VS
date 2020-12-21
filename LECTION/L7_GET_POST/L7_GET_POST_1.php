<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	var_dump($_GET);
	?>
	<form action="" method="GET">
		<p>Username</p>
		<input type="text" name="username">
		<p>Password</p>
		<input type="text" name="password">
		<input type="submit" name="submit" value="send">

	</form>
</body>
</html>