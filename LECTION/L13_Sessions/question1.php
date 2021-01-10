<?php 
	session_start();
	$_SESSION['user_name'] = $_POST['name'];
	echo $_SESSION['user_name'];
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Question one</title>
</head>
<body>
	<h1>Question 1</h1>
	<p>Curent score <?=$_SESSION['game_result']; ?></p>
	<form method="post" action="qustion2.php">
		Select answer:
	<input type="radio" name="answer" value="0">Answer 1
	<input type="radio" name="answer" value="0">Answer 2
	<input type="radio" name="answer" value="1">Answer 3
	<input type="submit" name="submit" value="answer">
	</form>
</body>
</html>