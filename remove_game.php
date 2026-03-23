<?php
session_start();
include("db.php");

$game_id = $_POST['game_id'];
$user_id = $_SESSION['user_id'];

// secure delete
$conn->query("DELETE FROM user_games WHERE id='$game_id' AND user_id='$user_id'");

header("Location: library.php");
exit();
?>