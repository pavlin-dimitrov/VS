<?php 
	session_start();
	echo $_SESSION['user_name'];
			if ($_POST['answer'] == 1) {
		$_SESSION['game_result'] += 1;
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Final Result</title>
</head>
<body>
	<h1><?php echo $_SESSION['user_name']; ?></h1>
	<p>Curent score: <?= $_SESSION['game_result']; ?></p>,
	<a href="session_destroy.php">Exit</a>
</body>
</html>