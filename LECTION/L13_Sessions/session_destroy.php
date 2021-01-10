<?php
session_start();
echo "befor session destroy - ";
echo $_SESSION['user_name'];
echo "<p></p>";
echo $_SESSION['game_result'];
session_destroy();
header('Location');
