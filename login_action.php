<?php
session_start();
include("db.php");

// prevent undefined errors
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// basic validation
if (empty($email) || empty($password)) {
    echo "<script>alert('Please fill all fields'); window.location='login.php';</script>";
    exit();
}

// check user by email
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    $user = $result->fetch_assoc();

    // 🔥 BLOCK CHECK (IMPORTANT)
    if (isset($user['status']) && $user['status'] == 'blocked') {
        echo "<script>alert('🚫 Your account is blocked by admin'); window.location='login.php';</script>";
        exit();
    }

    // verify password
    if (password_verify($password, $user['password'])) {

        // ✅ session store
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['gamer_tag'] = $user['gamer_tag'];
        $_SESSION['role'] = $user['role']; // 🔥 admin support

        header("Location: index.php");
        exit();

    } else {
        echo "<script>alert('❌ Wrong Password'); window.location='login.php';</script>";
    }

} else {
    echo "<script>alert('❌ User Not Found'); window.location='login.php';</script>";
}
?>