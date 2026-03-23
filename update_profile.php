<?php
session_start();
include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$id = $_SESSION['user_id'];

// safe inputs
$gamer_tag = $_POST['gamer_tag'] ?? '';
$email = $_POST['email'] ?? '';
$dob = $_POST['dob'] ?? '';
$gender = $_POST['gender'] ?? '';
$country = $_POST['country'] ?? '';
$favorite_game = $_POST['favorite_game'] ?? '';
$gamer_level = $_POST['gamerLevel'] ?? '';

$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// ================= AVATAR =================
$avatar_query = "";

if (!empty($_FILES['avatar']['name'])) {

    $upload_dir = "uploads/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_name = time() . "_" . basename($_FILES['avatar']['name']);
    $target = $upload_dir . $file_name;

    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target)) {
        $avatar_query = ", avatar='$file_name'";
    }
}

// ================= PASSWORD =================
$password_query = "";

if (!empty($password)) {

    if ($password !== $confirm_password) {
        echo "❌ Password mismatch";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $password_query = ", password='$hashed_password'";
}

// ================= UPDATE =================
$sql = "UPDATE users SET
gamer_tag='$gamer_tag',
email='$email',
dob='$dob',
gender='$gender',
country='$country',
favorite_game='$favorite_game',
gamer_level='$gamer_level'
$password_query
$avatar_query
WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "❌ Error: " . $conn->error;
}
