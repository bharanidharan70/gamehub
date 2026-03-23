<?php
include("db.php");

// safe input
$gamer_tag = $_POST['gamer_tag'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$dob = $_POST['dob'] ?? '';
$gender = $_POST['gender'] ?? '';
$country = $_POST['country'] ?? '';
$favorite_game = $_POST['favorite_game'] ?? '';
$gamer_level = $_POST['gamerLevel'] ?? '';

// validation
if (empty($gamer_tag) || empty($email) || empty($password)) {
    echo "Please fill all required fields";
    exit();
}

// password match check
if ($password !== $confirm_password) {
    echo "❌ Password mismatch";
    exit();
}

// check existing email
$check = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($check && $check->num_rows > 0) {
    echo "❌ Email already registered";
    exit();
}

// hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// FILE UPLOAD SAFE
$avatar_name = $_FILES['avatar']['name'];
$tmp_name = $_FILES['avatar']['tmp_name'];

$upload_dir = "uploads/";

// create folder if not exists
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// unique file name
$new_name = time() . "_" . basename($avatar_name);
$target_file = $upload_dir . $new_name;

// move file
if (!move_uploaded_file($tmp_name, $target_file)) {
    echo "❌ File upload failed";
    exit();
}

// INSERT
$sql = "INSERT INTO users 
(gamer_tag, email, password, dob, gender, country, favorite_game, gamer_level, avatar)
VALUES 
('$gamer_tag', '$email', '$hashed_password', '$dob', '$gender', '$country', '$favorite_game', '$gamer_level', '$new_name')";

if ($conn->query($sql)) {
    header("Location: login.php");
    exit();
} else {
    echo "❌ Database Error: " . $conn->error;
}
