<?php
include("db.php");

$email = $_POST['email'] ?? '';

if (empty($email)) {
    header("Location: forgotpassword.php?error=empty");
    exit();
}

$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if ($result && $result->num_rows > 0) {

    // generate new password
    $new_password = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 8);

    $hashed = password_hash($new_password, PASSWORD_DEFAULT);

    // update DB
    $conn->query("UPDATE users SET password='$hashed' WHERE email='$email'");

    // 🔥 IMPORTANT CHANGE HERE
    header("Location: login.php?reset=success&pass=$new_password");
    exit();

} else {
    header("Location: forgotpassword.php?error=notfound");
    exit();
}
?>