<?php
include("db.php");

$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if ($password !== $confirm) {
    echo "❌ Password mismatch";
    exit();
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

$conn->query("UPDATE users SET password='$hashed', otp=NULL, otp_expiry=NULL WHERE email='$email'");

echo "<script>
alert('✅ Password updated successfully');
window.location='login.php';
</script>";
