<?php
session_start();
include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$game_name = $_POST['game_name'];
$game_image = $_POST['game_image'];

// duplicate avoid check
$check = $conn->query("SELECT * FROM user_games WHERE user_id='$user_id' AND game_name='$game_name'");

if ($check->num_rows == 0) {
    $conn->query("INSERT INTO user_games (user_id, game_name, game_image)
    VALUES ('$user_id', '$game_name', '$game_image')");
}

header("Location: library.php");
exit();
?>