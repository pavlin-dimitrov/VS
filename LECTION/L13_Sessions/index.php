<?php 
	session_start();
	$_SESSION['game_result'] = 0;
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game</title>
</head>
<body>
<h1>Start Game</h1>
<p>Curent score: <?= $_SESSION['game_result'] ?>
	<form method="post" action="question1.php">
		Enter your name:
		<input type="text" name="name">
		<input type="submit" name="submit" value="start">
	</form>
	
</body>
</html>